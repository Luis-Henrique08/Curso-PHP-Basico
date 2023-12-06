<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v=array(  "nome"=>"Ana",
                    "idade"=>23,
                    "peso"=>65.5);
        //para cada elemento do meu vetor $v como $k associado ao $c
        foreach($v as $k=>$c){
            //vou mostrar que o valor de de $k é $c
            echo "O campo $k possui o conteudo $c </br>";
        }
    ?>
    </pre>
</div>
</body>
</html>
 