<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["Nome"])?$_GET["Nome"]:"[nao informado]";
        $ano = isset($_GET["Ano"])?$_GET["Ano"]:0;
        $sexo = isset($_GET["Sexo"])?$_GET["Sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome e $sexo e tem $idade anos.";
    ?>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 