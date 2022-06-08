<h1>Switch Case</h1>
<?php 

$diaDaSemana = date("w");
$diaDaSemana = $diaDaSemana + 5;

switch($diaDaSemana){

    case 0:
        echo "Hoje é Domingo";
        break;
    case 1:
        echo "Hoje é Segunda-Feira";
        break;
    case 2:
        echo "Hoje é Terça-Feira";
        break;
    case 3:
        echo "Hoje é Quarta-Feira";
        break;
    case 4:
        echo "Hoje é Quinta-Feira";
        break;
    case 5:
        echo "Hoje é Sexta-Feira";
        break;
    case 6:
        echo "Hoje é Sábado";
        break;
    default:
    echo "Data Inválida";
}

