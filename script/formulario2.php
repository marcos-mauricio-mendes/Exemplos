/** Calculando ná integra os dados do meu arquivo index.php


<?php

$a = isset($_POST['valores1'])?$_POST['valores1']:1;
$b = isset($_POST['valores2'])?$_POST['valores1']:1;
$soma = $a + $b;

print "$soma";


?>