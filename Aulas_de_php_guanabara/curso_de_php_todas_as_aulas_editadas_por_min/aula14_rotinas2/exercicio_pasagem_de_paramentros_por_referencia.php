<?php


//Veja ao adicionar o &em minha variavel da funcão ela si torna referencia e uma muda a outra.
function texte($x){


    $x +=2;
    echo "<p>O valor de X e $x</p>";

}


$a = 3;
texte($a);
echo "<p>O valor de A e $a </p>";



?>