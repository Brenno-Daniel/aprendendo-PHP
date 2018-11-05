<form><!-- COMO O METHOD NAO FOI COLOCADO,
         O PADRÃO VAI SER GET
         AS INFORMAÇÕES SERÃO MANDADAS PARA O MESMO ARQUIVO -->

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>
<?php

if(isset($_GET)){

    //KEY VAI SER O NOME DOS CAMPOS
    //VALUE SERA O VALOR DIGITADO NOS CAMPOS
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: ". $key. "<br/>";

        echo "Valor do campo: ". $value;

        echo "<hr>";
    }

}
?>