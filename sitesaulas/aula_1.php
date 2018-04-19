<?php

$nome = "Marcos Mauricio <br>";

echo $nome;

echo "O Nome Informado é " .$nome;


$numero1 = 10;
$numero2 = 20;
$numero3 = 230;
$numero4 = 250;

$calculo1 = $numero1 + $numero2;
$calculo2 = $numero3 + $numero4;

echo "<br> $calculo1  <br>" ; 




if ( $calculo1 < $calculo2 ){
	
echo "Os valores são diferentes <br>";	
	
}

if ($numero1==10 and $numero2==20 ){
	
echo "Os valores são iguais <br>";	


include 'pessoa.class.php';

$pessoa = new pessoa();
$pessoa->nome='Pedro <br>';
$pessoa->andar();


include_once 'pessoa1.class.php';

$pedro = new pessoa("Pedro","Silva",30);
echo "<br>".$pedro->nome;
echo "<br>".$pedro->sobrenome;
echo "<br>".$pedro->idade;
$pedro->correr();
$pedro->__destruct();
 
	
}






?>