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
        $ano = isset($_GET["ano"])?$_GET["ano"]:"1900";
        $idade = date("Y")-$ano;
        echo "Você nasceu em $ano e terá $idade anos <br>";
        if($idade < 16){
            $tipovoto  = "não vota";
        }
        elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $tipovoto = "opcional";
            }
            else{
                $tipovoto = "obrigatório";
            }
        echo "Então seu voto é $tipovoto"
        ?>
    </div>
</body>
</html>