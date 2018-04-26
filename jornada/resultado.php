<?php 


$VA1 = $_GET[ "APE_CASA"];
$VA2 = $_GET[ "ONIBUS"];
$VA3 = $_GET[ "METRO"];
$VA4 = $_GET[ "APE_ORION"];
$RESULTADO = "0";

//	default : $RESULTADO = 0 " Irá caregar um valor nulo ";

$RESULTADO = $VAI+$VA2+$VA3+$VA4;

echo $RESULTADO;



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RESULTADO</title>
</head>

<body>
</body>
</html>
