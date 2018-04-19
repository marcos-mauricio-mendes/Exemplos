<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Formulario PHP Avançado</title>
    <meta charset="utf-8">
	
	</head>
<body>
<?php

$nome = $_POST["nome"]
$ano = $_POST["ano"];
$sexo = $_POST["sexo"];
$idade = date("Y") - $ano;

echo "$nome e $sexo e tem $idade anos";
?>

<br />
<a href="formulario_avançado.html" >Voltar</a>
</body>
</html>