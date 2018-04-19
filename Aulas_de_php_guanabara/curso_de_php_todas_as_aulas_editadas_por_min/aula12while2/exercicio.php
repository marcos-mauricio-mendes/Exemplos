<?php



$aula = '<h3>Esta aula estranha inverte os parametros do while</h3>';
$c= 10;
$d= 1;

echo "$aula <br>";

 echo " Ordem Decrecente: <br>";
do{
   
    echo " $c <br> ";
    $c--;
    

}while($c >=1);

echo " Ordem Crescente: <br>";
do{
    
    echo " $d <br> ";

    $d++;
    

}while($d <= 10);







?>