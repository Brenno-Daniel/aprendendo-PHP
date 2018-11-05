<?php
// TIPOS DE DADOS 
// *********************************
// TIPO BASICO
$nome = "Brenno";
$site = 'www.brennovisk.com.br';

$ano = 1998;
$salario = 5500.99;
$bloqueado = false;

// *********************************
//TIPO COMPOSTO
$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);
//Apertando o CTRL+U no navegador ele da a estrutura formatada

// *********************************
//TIPOS ESPECIAIS
$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = NULL;//Ausencia de valor - não existe
$vazio = "";//Foi iniciado, só não tem informação - tem espaço reservado na memória

?>