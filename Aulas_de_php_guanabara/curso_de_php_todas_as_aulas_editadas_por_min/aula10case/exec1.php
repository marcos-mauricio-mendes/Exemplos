<!--Aula 10 exercicio de case calcula o que foi pedito no enunciado da questão-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Exercicio de Case Resultado</title>
    <meta charset="utf-8">
	
	</head>
<body>
<div>
<?php

$n = isset($_POST["num"])?$_POST["num"]:0;
$o = isset($_POST["oper"])?$_POST["oper"]:1;


switch ($o) {
	
	case 1:
	
	$r = $n * 2;
	
		break;
	case 2:
	
	
	$r = $n ^ 3;
	
		break;
	case 3:
	
	$r = sqrt($n);    //$n ^(1/2);
	

}


echo " O resultado da operação foi $r ";

?>
<p><a href="calcular.html" ><input type="submit" value="Voltar aos calculos"  /></a></p>

</div>


</body>
</html>