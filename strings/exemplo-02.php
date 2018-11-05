<?php
//FUNÇÕES PARA TRABALHAR COM STRINGS
$nome = "Brenno Daniel";

//Para deixar tudo maiúsculo
//echo strtoupper($nome);
$nome = strtoupper($nome);
echo $nome;

echo "<br/>";

//Minúsculo
$nome = strtolower($nome);
echo $nome;

echo "<br/>";

//Apenas a primeira letra
echo ucfirst($nome);
echo "<br/>";

//As primeiras letras das palavras
echo ucwords($nome);


?>