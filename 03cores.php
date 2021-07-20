<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $txt = isset($_GET["t"])?$_GET=["t"]:"Não Informado";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"10pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <style> 
        span.texto{
            font-size: <?php echo $tam; ?>;
            color:     <?php echo $cor; ?>;
        }
    </style>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            echo "<span class'texto'>$txt</span>";
        ?>
    </div>
    <a href="exercicio03.html">Voltar</a>
</body>
</html>