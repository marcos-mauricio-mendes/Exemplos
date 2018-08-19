<?php

// Chamando o Classe
include_once "classe/manipulacao_de_dados.php";
//Criando o Objeto para manipulação da Classe
$del = new manipulacao_de_dados();
// Chamando os metodos da minha Classe para deletação dos valores de minha Tabela, e as suas colunas.
$del->setTabela("pessoa");  
$del->setValorNaTabela("nome");
$del->setValorPesquisa("3do");
// Chamando o metodo excluir
$del->excluir();










?>