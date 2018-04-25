<?php 
// Data de Criação 23 - 04 - 2018
// O script feito para receber os dados do formulário da pagina index.php
// Partindo desde principio podemos calcular o tempo e ou a media de locoloção de Contagem - Mg para o Orion Bairro Bom Fim.
//	default : $RESULTADO = 0 " Irá caregar um valor nulo ";


$VA1 = $_GET[ "APE_CASA"];
$VA2 = $_GET[ "ONIBUS"];
$VA3 = $_GET[ "METRO"];
$VA4 = $_GET[ "APE_ORION"];
$RESULTADO = "0";

$RESULTADO = $VAI+$VA2+$VA3+$VA4;

echo $RESULTADO;



?>
