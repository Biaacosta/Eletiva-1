<?php
$mes = $_POST["mes"];

switch ($mes) {
    case 1:
        echo "Você escolheu Janeiro";
        break;

    case 2:
        echo "Você escolheu Fevereiro";
        break;

    case 3:
        echo "Você escolheu Março";
        break;
    
    case 4:
        echo "Você escolheu Abril";
        break;

    case 5:
        echo "Você escolheu Maio";
        break;
    
    case 6:
        echo "Você escolheu Junho";
        break;

    case 7:
        echo "Você escolheu Julho";
        break;

    case 8:
        echo "Você escolheu Agosto";
        break;

    case 9:
        echo "Você escolheu Setembro";
        break;

    case 10:
        echo "Você escolheu Outubro";
        break;

    case 11:
        echo "Você escolheu Novembro";
        break;

    case 12:
        echo "Você escolheu Dezembro";
        break;
        
    default:
        echo "Opção inválida";
}
?>