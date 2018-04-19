<html>
<head>
    <title>Resultado</title>
    <meta charset="utf-8">
	
	</head>
<body>

<div>

<?php

$n1 = isset($_POST["nota1"])?$_POST["nota1"]:0000;
$n2 = isset($_POST["nota2"])?$_POST["nota2"]:0000;

$media = ( $n1 + $n2 ) / 2;

if ($media <= 5){

echo "Você candidato tirou $media e foi reprovado";

}elseif ($media >= 6 && $media < 7){
	
	echo "Você candidato tirou $media e está de recuperação";
	
	}
	else{
	
	echo "Você candidato tirou $media e foi aprovado";
	
	}


?>

</div>
<br />
<a href="calcular_a_media_de_aluno_de_1_a_10.html" >Voltar</a>

</body>
</html>