<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Resultado</title>
    <meta charset="utf-8" />
    
    
    </head>
    <body>
            

<?php

include "coneccao.php";

$buscar = $_POST['buscar'];


$sql = mysql_query("SELECT * FROM usuariosbd WHERE nome LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0 ){
        while($linha = mysql_fetch_array($sql)){
        
        $nome = $linha['nome'];
        $sobrenome = $linha['sobrenome'];
        $idade = $linha['idade'];
        $descricao = $linha['descricao'];
        echo "<strong>Nome: </strong>".@$nome;
        echo "<br /><br />";
        echo "<strong>Sobre nome: </strong>".@$sobrenome;
        echo "<br /><br />";
        echo "<strong>Idade: </strong>".@$idade;
        echo "<br /><br />";
        echo "<strong>Descrição </strong>".@$descricao;
		echo "<br /><br />";
        
        
        }
      }else {
            echo "Nome Invalido tenete Marcos";      
        
        }
?>
        
        
        
     
    </body>
</html>
    