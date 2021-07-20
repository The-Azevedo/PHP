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
            $c = 10;
            while ($c >=0){
            echo $c."<br>";
            $c-=2;
            }            
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>