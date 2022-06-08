<?php
echo "<h1> STRINGS</h1><br>";

//Deixar texto em Maiusculas

$nome = "romeu oliveira junior";

$nome = strtoupper($nome); //Converte em maíusculas

echo "$nome<br>";

$nome = strtolower($nome); //Converte em Minúsculas

echo "$nome<br>";

$nome = ucfirst($nome);

echo "$nome<br>"; //Primeira letra da frase maiúscula

$nome = ucwords($nome);

echo "$nome<br>"; //Primeira letra da palavra maiúscula

$nome = str_replace("o","0",$nome);
$nome = str_replace("O","0",$nome);
$nome = str_replace("e","3",$nome);
$nome = str_replace("a","4",$nome);
$nome = str_replace("i","1",$nome);

echo "$nome<br>"; //Substitui caracteres

$frase = "Necessity is the mother of invention";

$q = strpos($frase,"mother",0);  //strpos retorna em qual caractere começa a string procurada
echo "$q<br>";

echo substr($frase,0,$q); //substr retornar tudo que está antes de $q

$q = strpos($frase,"mother",0);  //strpos retorna em qual caractere começa a string procurada
echo "$q<br>";

echo substr($frase,$q,strlen($frase)); //substr retornar tudo que está depois de $q






