<!--Aula 10 exercicio de case calcula o que foi pedido no enunciado na questão-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Exercicio de Case</title>
    <meta charset="utf-8">
	
	</head>
<body>
<?php


$dia = isset($_POST['ds'])?$_POST['ds']:0;


switch ($dia) {

case 2:
case 3:
case 4:
case 5:
case 6:
	echo "Levanta e vai estudar";
	break;
	case 7:
	case 8:
		echo "Vai descançar pequeno gafanhoto :)";
		break;
	default:
		echo "Dia da semana invalido";
}

?>

<p><a href="javascript:history.go(-1)" ><input type="submit" value="Voltar aos calculos"  /></a></p>


</body>
</html>