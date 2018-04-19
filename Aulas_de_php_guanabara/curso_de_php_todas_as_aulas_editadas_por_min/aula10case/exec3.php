<!--Aula 10 exercicio de case calcula o que foi pedido no enunciado na questão-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Exercicio de Case</title>
    <meta charset="utf-8">
	
	</head>
<body>
<?php


$cit = isset($_POST['cidades'])?$_POST['cidades']:0;

echo "Sua cidade selecionada é:<br>";

switch ($cit) {

case 1:

echo "Minas Gerais"; 

break;

case 2:

echo "Rio de Janeiro";

break;
case 3:

echo "São Paulo";

break;
case 4:

echo "Espirito Santo";

break;
case 5:

echo "Santa Catarina";

break;
case 6:

echo "Paraná";

break;
case 7:

echo "Rio Grande";

break;
case 8:

echo "Brasilia";

break;
case 9:

echo "Goiáis";

break;
case 10:

echo "Mato Grosso";

break;
case 11:	

echo "Mato Groso do sul";

break;        
}

 

?>

<p><a href="javascript:history.go(-1)" ><input type="submit" value="Retornar a seleção das cidades"  /></a></p>


</body>
</html>