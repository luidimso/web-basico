<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JSON</title>
  </head>
  <body>
    <div id="lista"></div>

    <script type="text/javascript" src="../jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $.getJSON("gerar_json.php", function(dados){
        console.log(dados);
        $.each(dados, function(i, dado){
          console.log(dado);
        });
      });
    </script>
  </body>
</html>
