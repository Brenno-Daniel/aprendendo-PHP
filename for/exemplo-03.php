<?php
//Colocando uma seleção para o usuário selecionar o ano
//Utilizando a tag select do HTML
echo "<select>";

/*Mostrar os anos passados de acordo com o ano atual
Nesse exemplo os 10 anos passados de 2018
date("Y") retorna o ano atual*/
for ($i= date("Y"); $i >= date("Y") - 20; $i--) { 
    echo '<option value=" '.$i.'">'.$i.'</option>';
}

echo "</select>";

?>