<?php
/* Comentário de bloco
$anoNascimento = 1998;

$nomeCompleto = "";*/
// Na linha de baixo temos uma variável com número no nome
$nome1 = "Brenno";

$sobrenome = "Daniel";

//Abaixo vemos como concatenar
$nomeCompleto = $nome1.$sobrenome;

echo $nomeCompleto;

exit;//Vai parar o código a partir daqui

echo "<br/>";

//Na linha de baixo vemos como apagar uma variável da memória
//unset($nome1);

//Na linha de baixo vemos como fazer uma verificação
if (isset($nome1)){

    echo $nome1;

}

?>