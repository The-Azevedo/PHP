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
        $ini = isset($_GET["ini"])?$_GET["ini"]:0;
        $fim = isset($_GET["fim"])?$_GET["fim"]:0;
        $inc = isset($_GET["inc"])?$_GET["inc"]:0;
        if($ini<$fim){
        $c = $ini;
            while ($c <=$fim){
            echo $c."<br>";
            $c+=$inc;
            }
        }else{
            $c = $ini;
            while ($c >=$fim){
            echo $c."<br>";
            $c-=$inc;
            }        
        }                   
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>