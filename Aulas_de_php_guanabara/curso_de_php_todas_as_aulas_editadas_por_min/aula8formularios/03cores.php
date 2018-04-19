<?php

$txt = $_POST["t"];
$tam = $_POST["tam"];
$cor = $_POST["cor"];

?>
<!--Aula 08 mudando as cores do formulário-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Formulario PHP Avançado</title>
    <meta charset="utf-8">
<style>

.texto {

	font-size: <?php echo $tam; ?>;
	color: <?php echo $cor; ?>;

} 
</style>

</head>
<body>
<?php print "<span class='texto'>  $txt  </span>"; ?>

<br>
<a href="formulario_mais_avançado.html" >Voltar</a>
</body>
</html>