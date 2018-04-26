<?php
include_once ("Class/lucrosCeviu.php");


$con = new lucrosPorcento($_POST['mensalidade'],$_POST['valortotal'],$_POST['porcentagem']);


$con->porcentagem();
$con->soma();
$con->imprimir();


?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <title>Lucros e Mais Lucros</title>
        <link rel="stylesheet" href="estilo/estilo.css" type="text/css" media="screen" />
    </head>
<body>


</body>
   </html>

