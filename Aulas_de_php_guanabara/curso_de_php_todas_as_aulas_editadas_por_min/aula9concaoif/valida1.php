<html>
<head>
    <title>Resultado</title>
    <meta charset="utf-8">
	
	</head>
<body>

<div>

<?php

$a = isset($_POST["ano"])?$_POST["ano"]:1900;
$i = date("Y") - $a;
echo "Voce nasceu em $a e tem $i anos<br>";

if ($i < 16){

$tipovoto = "não vota";

}elseif (($i >= 16 && $i < 18) || ($i>65)){
	
	$tipovoto = "voto não obrigatorio";
	
	}
	else{
	
	$tipovoto = "voto obrigatorio";
	
	}

echo " Com esta idade seu $tipovoto";

?>

</div>
<br />
<a href="valida.html" >Voltar</a>

</body>
</html>