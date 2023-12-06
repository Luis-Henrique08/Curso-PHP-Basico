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
        // pega o valor enviado
        $n = isset($_GET["num"])?$_GET["num"]:0;
        //variavel que conta os numeros multiplos
        $contador = 0;
        echo "<h3> Analisando o numero $n...<br/>";
        
        //Valores múltiplos
        echo "Valores múltiplos: ";
        // para i=1, enquanto i<=val, faça i++, ou seja ira aumentar 1
        for($i=1;$i<=$n;$i++){
            //se o modulo(ou seja o resto da divisão) for igual/igual(identico) a 0, imprima $i, caso não seja, não imprima nd)
            if(($n%$i)==0){
                echo "$i ";
                // e toda vez que esse if for verdadeiro o contador ira aumentar +1
                $contador++;
            }
        }
        // imprime o total de multiplos
        echo "</br>Total de múltiplos: $contador <br/>";
        // se o valor de $contador for maior do que 2, obviamente imprima NÃO É PRIMO
        if($contador>2){
            echo "Resultado: $n <strong style='color:red'>NÃO É PRIMO!</strong> <br/>";
        }
        // se não, se o contador for ==2 ou seja idêntico, imprima É PRIMO
        elseif($contador==2){
            echo"Resultado: $n <strong style='color:red'>É PRIMO!</strong>";
        }
    ?>
    <br/><a href= "javascript:history.go(-1)" class ="botao">VOLTAR</a>
</div>
</body>
</html>
 