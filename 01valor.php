<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor calculado</title>
</head>
<body>
    <div>
        <?php
        $valor = $_GET["v"];
        $r = sqrt($valor);
        echo "A raiz de $valor é " . number_format($r,2);
        ?>
        <br><a href="teste.php">Voltar</a>
    </div>
</body>
</html>