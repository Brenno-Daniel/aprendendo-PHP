<?php 
//OPERADORES DE ATRIBUIÇÃO

//Valor inicial da variável
$valorTotal = 0;
echo "Valor inicial: " . $valorTotal . "<br/>";

//Somando valores à variável
$valorTotal += 100;
$valorTotal += 20;
echo "Novo valor com acréscimo: " . $valorTotal . "<br/>";

//Descontando valores da variável
//$valorTotal -= 10;

//Desconto com porcentagem, no caso, 9 por cento do valor
$valorTotal *= .9;

echo "Valor com desconto: " . $valorTotal;



?>