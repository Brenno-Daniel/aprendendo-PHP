<?php
//PRECEDENCIA DE OPERADORES

$resultadoF = (10 + 3) / 2 > 5 && 10 + 5 < 3;// => FALSE
$resultadoT = (10 + 3) / 2 > 5 || 10 + 5 < 3;// => TRUE

//echo $resultado;
var_dump($resultadoF);
echo "<br/>";
var_dump($resultadoT);

?>