<?php
// Comando para concectar com o Banco MySqli

 $servidor =  "localhost"; $usuario  = "root"; $senha    = ""; $banco   = "exemplo";
 
 $conecxao  = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("Não foi possivel conectar ao servidor e o banco de dados");


  

  ?>
