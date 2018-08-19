<?php


// Chamando o Classe
include_once "classe/manipulacao_de_dados.php";

$alt = new manipulacao_de_dados;
$alt->setTabela("pessoa");
$alt->setCampos("nome='xxxxxxxxx',email='close@close.com.br'");
$alt->setValorNaTabela("id_pessoa");
$alt->setValorPesquisa("24");
$alt->alerar();




?>