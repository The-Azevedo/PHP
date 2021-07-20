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
            $nome = isset($_GET["nome"])?$_GET["nome"]:"Não Informado";
            $ano = isset($_GET["ano"])?$_GET["ano"]:0;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Sem Sexo Para Informar";
            $idade = date("Y")-$ano;

            echo"$nome tem $idade anos de idade e é do sexo $sexo.";
        ?><br>
        <a href="exercicio_02.html">Voltar</a>

    </div>
</body>
</html>