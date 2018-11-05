<?php
//ESCOPO DE VARIÁVEIS - ATÉ VAI SUA AREA DE ATUAÇÃO
$nome = "Brenno";

//aqui sera um escopo
function teste(){

    global $nome;
    echo $nome;

}
//aqui sera outro escopo
function teste2(){

    $nome = "Brenno";
    echo $nome." agora no teste 2.";
}

teste();
echo "<br/>";
teste2();
?>