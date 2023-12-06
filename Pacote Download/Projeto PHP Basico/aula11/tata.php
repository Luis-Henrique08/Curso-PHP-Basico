<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
<?php
//verificando se tem valor no get(url) usando o isset
if(isset($_GET["inicio"]) && isset($_GET["fim"]) && isset($_GET["incremento"])){ 
    //se caso for verdadeiro irá guardar os valores do get nas seguintes variáveis
    $inicio = $_GET["inicio"];
    $fim = $_GET["fim"];
    $incremento = $_GET["incremento"];

    //verificando se o inicio é menor ou igual o fim para não haver erro
    if ($inicio <= $fim) {
        //inicio, limite, incremento
        for ($i = $inicio; $i <= $fim; $i += $incremento){
            //exibindo resultado
            echo $i."<br>";
        }
    }
    else{
        echo "O início deve ser menor ou igual o fim.";
    }

}

?>
<br/><a href= "javascript:history.go(-1)" class="botao">Voltar</a>

</div>   
</body>
</html>
<!-- tata que fez s2 -->