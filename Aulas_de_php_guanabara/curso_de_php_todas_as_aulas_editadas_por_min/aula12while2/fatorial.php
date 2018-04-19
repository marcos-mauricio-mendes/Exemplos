<?php


$valor = isset($_POST['val'])?$_POST['val']:1;

echo "<h3>Calculando o fatorial de $valor </h3>";


$c = $valor;

$fat = 1;


do{

    $fat = $fat * $c;
    $c--;


} while($c >= 1);


echo "<h4> $valor != $fat </h4>"; 


?>
<br />
<p><a href="calcular_fatoriais.html">Voltar</a></p>