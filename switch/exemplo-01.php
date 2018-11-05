<?php

$diaDaSemana = 5;//date("w");//date com "w" retorna o dia da semana em que estamos

switch ($diaDaSemana){

    case 0:
    echo "Domingo";
    break;

    case 1:
    echo "Segunda";
    break;

    case 2:
    echo "Terça";
    break;

    case 4:
    echo "Quarta";
    break;

    case 5:
    echo "Quinta";
    break;

    case 6:
    echo "Sexta";
    break;

    case 7:
    echo "Sabado";
    break;

    default:
    echo "Valor incorreto.";
    break;

}


?>