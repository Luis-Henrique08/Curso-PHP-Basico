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
    $c = 1;
    while ($c <= 5) {
        // Verifica se o valor foi enviado via GET e se é um número
        if (isset($_GET["v$c"])) {
            $valor = $_GET["v$c"];
            echo "Valor $c: $valor <br />";
        } else {
            echo "Valor $c não foi enviado corretamente. <br />";
        }
        $c++;
    }
    ?>
</div>
</body>
</html>
 