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
        //funcao de teste passando x como parametro por valor// caso seja adicionado & na $x de teste, o valor de a vai ser passado como referencia
        //para a $x, qualquer alteração em x vai alterar a
        function teste(&$x){
            $x+=2;
            echo "<p>O valor de X é $x</p>";
        }
        $a=3;
        // chamar o teste passando a variavel $a como parametro
        teste($a);
        echo "<p>O valor de A é $a</p>";

    ?>
</div>
</body>
</html>
 