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
        <table border="1"><tr>
    <?php
    //para cada elemento do vetor c tratado como valor, ele vai colocar o elemento do vetor c dentro do valor
        $c = range(5,20,2);
        foreach($c as $v){
            echo "<td>$v ";
        }
    ?>
        </table>
    </pre>
</div>
</body>
</html>
 