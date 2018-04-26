<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 26/01/2015
 * Time: 23:39
 */

include_once ("manipulacaoDeDados.php");

/** Inserção de dados

$novo = new manipulacaoDeDados();

$novo->setTabela("pessoa");

$novo->setCampos("nome, email");

$novo->setDados("'Rosca', 'rosca@aol.com.br'");

$novo->inserir();

//imprimir o retorno de minha função
print $novo->getMsg();

**/


/** Deleção de dados

$del = new manipulacaoDedados();

$del->setTabela("pessoa");
$del->setValorNaTabela("email");
$del->setvalorPesquisa("ginaldo@gmail.com");

$del->excluir();

**/


$alt = new manipulacaoDeDados();

$alt->setTabela("pessoa");
$alt->setCampos("email='paraiba@gmail.com'");

$alt->setValorNatabela("id_nome");
$alt->setvalorPesquisa("1");
$alt->alterar();


echo $alt->getMsg();