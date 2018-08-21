<?php


include_once "manipulacao_de_dados.php";

$txt_catega = $_POST['txt_categoria'];

	
    $cad = new manipulacao_de_dados();
    $cad->setTabela("categoria");
    $cad->setcampos("categoria");
    $cad->setDados("'$txt_catega'");
    $cad->inserir();
	echo "dados inseridos com sucesso";
	







?>