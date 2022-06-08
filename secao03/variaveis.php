<?php
//Básico
$nome = "HCode";
echo "<h1>echo</h1>";
echo $nome;
echo "<br>";
echo "<h1>var_dump</h1>";
var_dump ($nome);
echo"<br>";

///Exemplo Unset

$nome1 = "Romeu";
$snome = "Oliveira";
echo "<h1> Unset </h1>";
echo "Valor atual das variáveis nome e snome:<br>";
echo $nome1." ".$snome;
unset($nome1,$snome);
echo "Valor atual das variáveis nome e snome:<br>";
echo $nome1." ".$snome;

//** Arrays e Objetos *//

/*Array*/
echo"<pre>";
$frutas = array("abacaxi","maçã","banana","pera");
var_dump($frutas);

/*Objeto*/
$nascimento = new datetime();
var_dump($nascimento);




?>
