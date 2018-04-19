<?php

$nu = isset($_POST['num'])?$_POST['num']:1;

for($c = 1; $c <= 10; $c++){

    $r = $nu * $c;
    echo "$nu x $c = $r <br/>";


}




?>

<br/><a href="javascript:history.go(-1)">Voltar</a>