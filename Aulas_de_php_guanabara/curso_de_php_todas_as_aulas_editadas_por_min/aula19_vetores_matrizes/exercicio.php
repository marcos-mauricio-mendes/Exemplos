<meta charset="utf-8">

<pre>
<?php
//Mais fácil usar e visualizar

$v = array(10,20,30,40,50,60,70);

print_r($v);



?>
</pre>
<br />

<?php
//Mais completo para testes

$n = array(10,20,30,40,50,60,70);

var_dump($n)


?>
<br /><br />
<?php
//Conta (cont()) quantos elementos tem em meu vetor

$n = array(10,20,30,40,50,60,70);

echo " O vetor tem  ".count($n).  "elementos";

?>
<br /><br />

<p><img src="Vetores%20e%20Matrizes%20-%20Parte%202%20-%20Curso%20PHP%20Inician.png"></p>


<?php

//Inserindo dados em meu vetor


$v = array("A","B","C","D","E","F","G");

$v[] = "O";

array_push($v,"O");

print_r($v);


echo "<br><br> array_push() colocar um elemento no final<br>
array_unshift(variavel,elemento)inserindo um elemento  no inicio do meu vetor<br>
array_shift(variavel,elemento) elemina um dado no inicio do meu vetor<br>
array_pop() elimina espaços em meu vetor<br>";

echo "<br>";
?>


<?php

//colocando o vetor em ordem
//sort(variavel do vetor)
//colocando o vetor em ordem ao contrario
//rsort($n)


$v = array("7","4","20","5","2");

print_r($v);
sort($v);
print_r($v);


?>
<br><br>













