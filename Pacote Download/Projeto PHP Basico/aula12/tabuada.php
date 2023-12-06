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
        $v = isset($_GET["val"])?$_GET["val"]:0;
        echo "<h1>Mostrando a Tabuada do $v <br>";
        $a=1;
        do{
            $r=$v*$a;
            echo "$v x $a = $r<br>";
            $a=$a+1;
        }while($a<=10);

    ?>
    <a href = "tabuada.html" class ="botao">Voltar</a>
</div>
</body>
</html>
 