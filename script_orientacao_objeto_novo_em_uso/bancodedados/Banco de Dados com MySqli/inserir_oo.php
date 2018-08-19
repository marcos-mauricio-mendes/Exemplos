<?php

// Chamando o Classe
include_once "classe/manipulacao_de_dados.php";
//Criando o Objeto para manipulação da Classe
$ver = new manipulacao_de_dados();
// Chamando os metodos da minha Classe para inserção dos valores dá Tabela referenciado as colunas
$ver->setTabela("pessoa");
$ver->setCampos("nome,email");
$ver->setDados("'3do','close@close.com.br'");
// Chamando o metodo de inserção
$ver->inserir();
// Chamando o metodo retornar o comando executado
$ver->getMsg();









?>