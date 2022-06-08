<h1>Laços Repetição</h1>
<h2>For</h2>
<?php 

for ($i = 0; //início da variável i
     $i <=10; //condição para completar o laço
     $i++){  //incremento da variável +1
    echo "$i - ";
}
echo "<br>";

for ($i = 0; //início da variável i
     $i <=1000; //condição para completar o laço
     $i+=5)//incremento da variável +5
     {  if ($i > 200 && $i<800)continue;//continue faz o laço ignorar o echo;
        if ($i === 900)break;//quebra o laço;
    echo "$i - ";
}
Echo "<br>Chegamos em $i!";
Echo"<br><br>";

echo "<select>";
for($i = 2022;$i>=1900;$i--){
Echo "<option value =$i\">$i</option>";
}
echo"</select>";

?>
<h2>Foreach</h2>
<?php
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
);

foreach($meses as $mes){
        echo "O mês é $mes. ";
    }
echo"<br>";

foreach($meses as $index => $mes){
    echo "O índice $index contém o mês é $mes /";
}
echo"<br>";

echo "<select>";
foreach($meses as $mes){
Echo "<option value =$mes\">$mes</option>";
}
echo"</select>";

?>

<h2>While</h2>

<?php
$condicao = true;
while ($condicao){
    $numero = rand (1,100);
    if($numero === 3){
        echo "número três!";
        $condicao = false;
    }
    echo "$numero - ";
}


?>

<h2>Do...While</h2>

<?php
$num = 0;
do { echo "$num<br>";
    $num++;

}while ($num<10);


?>