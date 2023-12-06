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
    if(isset($_GET["estados"])){
        $estado = $_GET["estados"];
        switch($estado){
            case 'AC':
            case 'AM':
            case 'AP':
            case 'PA':
            case 'RO':
            case 'RR':
            case 'TO':
            $regiao = 'norte';
            break;
            case 'AL':
            case 'BA':
            case 'CE':
            case 'MA':
            case 'PB':
            case 'PE':
            case 'PI':
            case 'RN':
            case 'SE':
            $regiao = 'nordeste';
            break;
            case 'DF':
            case 'GO':
            case 'MT':
            case 'MS':
            $regiao = 'centro-oeste';
            break;
            case 'ES':
            case 'MG':
            case 'RJ':
            case 'SP':
            $regiao = 'sudeste';
            break;
            case 'PR':
            case 'RS':
            case 'SC':
            $regiao = 'sul';
            break;
            default: $regiao = 'Estado não encontrado';
        }
        $resposta = "Região $regiao";
        echo "Voce mora na $resposta";
    }
    ?>
     <br/><a href= "javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 