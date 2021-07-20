<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"])?$_GET["val"]:1;
          echo "<h1> Calculando o valor fatorial de $v</h1><br><br>";
          $c = $v;
          $fat = 1;
          do{
            $fat = $fat * $c;
            $c--;   
          } while($c >=1);
        echo "<h1> $v ! = $fat</h1>";
         ?>
    <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>