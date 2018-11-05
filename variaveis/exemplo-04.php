<?php

//Variáveis pré definidas ou arrays super globais
//Variavel super global "GET"
$nome = (int)$_GET["a"];//Para realizar o cast, ou conversão do dado, podemos colocar precedendo a variável super global, nesse caso um inteiro
//var_dump($nome);

//Como pegar o ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];//O "$_SERVER" pega o ip do ambiente
//echo $ip;

//Pegar o nome do arquivo em que o usuário esta acessando
$arquivoName = $_SERVER["SCRIPT_NAME"];
echo $arquivoName

?>