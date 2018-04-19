
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Formulario PHP</title>
    <meta charset="utf-8">
	
	</head>
<body>

<?php

$valor = $_POST["v"];
$rq = sqrt($valor);


echo "O valor enviado foi $valor <br>";
//Concatenendo a expreção para aparecer somente dois digitos

echo "A raizde $valor e igual a " .number_format($rq,2);

?>
</br>
<a href="fomulario_simples.html">voltar</a>


</body>
</html>