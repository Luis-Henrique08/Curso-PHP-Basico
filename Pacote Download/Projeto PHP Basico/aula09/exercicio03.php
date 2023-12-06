<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <link rel="stylesheet" href="_css/estiloexercicio03.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $m = ($nota1+$nota2)/2;
        echo "A media entre <span class='vermelho'>$nota1</span> e <span class='vermelho'>$nota2</span> é igual a <span class='vermelho'>$m</span>";
        if($m<5){
           $sit = "Reprovado";
        }
        elseif($m>=5&&$m<=7){
            $sit = "Em recuperacao";
        }
        elseif($m>7){
            $sit = "Aprovado";
        }  
        echo "<br>Situação do aluno: <span class='vermelho'>$sit</span>";
    ?>
    <br/>
    <a href="exercicio03.html" class ="botao">Voltar</a>
</div>
</body>
</html>
 