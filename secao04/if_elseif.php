<?php
echo "<h1> If, Elseif, Else</h1>";

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;
$minhaIdade = $_GET["idade"];

if($minhaIdade <= $idadeCrianca){

    echo "Você é uma criança!";

} elseif($minhaIdade >= $idadeCrianca && $minhaIdade < $idadeMaior) {

    echo "Você é um Adolescente";
    
}elseif($minhaIdade >= $idadeMaior && $minhaIdade < $idadeIdoso) {

    echo "Você é um Adulto";
    
}else{
    echo "Você é um Idoso";
}

//*Operador Ternário*//

$nome = "Romeu";
echo ($nome == "Romeu")? "<br>Nome Correto" : "<br>Nome errado";






