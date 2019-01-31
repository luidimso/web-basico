<?php
  $conecta = mysqli_connect("localhost", "root", "", "ajax");

  $query = "select * from pessoa";
  $resposta = mysqli_query($conecta, $query);

  $json = array();
  while($linha = mysqli_fetch_object($resposta)){
    $json[] = $linha;
  }

  echo json_encode($json);

  mysqli_close($conecta);
?>
