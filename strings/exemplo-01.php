<?php
//INTERPOLAÇÃO DE VARIÁVEIS
$nome = "Brenno";

$nome2 = 'Developer';

//Para ver que as duas são strings
var_dump($nome, $nome2);
echo "<br/><br/>";

//Com aspas duplas é realizada a interpolação
//É realizada uma busca no código para identificar a variável inclusa no texto
echo "Olá $nome, seja bem vindo!";
echo "<br/><br/>";

//Com aspas simples não é realizada a interpolação
//Tudo dentro das aspas simples é encarado como texto/ string
echo 'Olá $nome, seja bem vindo!';


?>