<?php
//EXEMPLO DE IF
$suaIdade = 61;
$menorIdade = 12;
$adolescente = 15;
$adulto = 18;
$idoso = 60;

if ($suaIdade < $menorIdade){
    echo "Você é menor de idade.";
} else if ($suaIdade < $adolescente || $suaIdade < $adulto){
    echo "Você é um adolescente.";
} else if ($suaIdade < $adulto || $suaIdade < $idoso){
    echo "Você é um adulto.";
} else {
    echo "Você é um idoso.";
}

?>