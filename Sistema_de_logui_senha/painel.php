<?php

include "coneccao.php";


//abrindo uma sesção para saber si está logado ou não
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
    header("Location: loguin.php");
    exit;

}else {
    echo "<center>Você está logado! :D</center>";


}

?>
<html lang="pt-br">
<head>
<title>Painel do Site</title>    
<meta charset="utf-8">
    
    
</head>
<body>
    
    
    
<br />    
<center><a href="logout.php">Sair do sistema</a></center>    
</body>
</html>