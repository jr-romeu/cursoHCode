<h1> Arrays</h1>


<?php
$carros[0][0] = "Volkswagen";
$carros[0][1] = "Gol";
$carros[0][2] = "Jetta";
$carros[0][3] = "Virtus";
$carros[0][4] = "Voyage";
$carros[1][0] = "GM";
$carros[1][1] = "Onix";
$carros[1][2] = "Camaro";
$carros[1][3] = "Cruze";
$carros[1][4] = "Spin";
$carros[2][0] = "Ford";
$carros[2][1] = "Ecosport";
$carros[2][2] = "Ka";
$carros[2][3] = "Ranger";
$carros[2][4] = "Mustang";

print_r($carros);

?>



<?php 

$pessoas = array();
array_push($pessoas,array('nome'=>'Joao','Idade'=>20));
array_push($pessoas,array('nome'=>'Romeu','Idade'=>45));
array_push($pessoas,array('nome'=>'Matheus','Idade'=>15));
array_push($pessoas,array('nome'=>'Ian','Idade'=>1));
array_push($pessoas,array('nome'=>'Catherine','Idade'=>43));
array_push($pessoas,array('nome'=>'Idalina','Idade'=>85));
array_push($pessoas,array('nome'=>'Reginaldo','Idade'=>60));


?>

<h2>JSON</h2>
<?php

$json = json_encode($pessoas);
$bytes = file_put_contents('myfile.json',$json); //Escreve array para arquivo JSON;

$json = file_get_contents("myfile.json"); //Lê conteúdo do arquivo JSON;
$data = json_decode($json,true);
print_r($data);