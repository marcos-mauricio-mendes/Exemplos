<html>
<head>
<title>Autenticacao de Usuario</title>
<meta charset="utf-8">    
    <!--Script de Java Script para redirecionamento de paginas-->
    <script type="text/javascript">
    
    function loginsuccessfully() {
    
    setTimeout("window.location='painel.php'", 5000);
    
    }
        
    function loginfailed() {
    
    setTimeout("window.location='loguin.php'", 5000);
    
    }
    
    
    </script>
    <!--Script de Java Script para redirecionamento de paginas-->
</head>
<body>
<?php
//Logando no Banco
include "coneccao.php";
//Logando no Banco

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysql_query(" SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ") or die(mysql_error());
$row = mysql_num_rows($sql);

if($row > 0){
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
    echo "<script>loginsuccessfully()</script>";
	}else {
        echo "<center>Nome de Usuário ou senha inválidos! Aguarde um instante para tentar novamente.</center>";
        echo "<script>loginfailed()</script>";
}
?>
</body>
</html>