<?php

$nome = "Romeu"; //Escopo da variável é local

function teste(){

    global $nome; //Declara que o escopo da variável $nome é global

    echo $nome;
}

function teste2(){
    $nome = "Ian";
    echo $nome;
}

teste();
echo"<br>";
teste2();
?>