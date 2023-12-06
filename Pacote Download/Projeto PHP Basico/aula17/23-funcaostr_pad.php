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
        $nome="Luis Henrique";
        $novo=str_pad($nome,30," ",str_pad_right);
        print("Meu professor $novo é lindo");
    ?>
</div>
</body>
</html>
 