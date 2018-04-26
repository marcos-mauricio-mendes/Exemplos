<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/01/2015
 * Time: 20:03
 */

include_once "class/manipulacaoDeDados.php";

/**  Inserir dados **/

$novo = new manipulacaoDedados();

/** Exluir dados */

$del =  new manipulacaoDedados();

/** Alterando dados */

$alt = new manipulacaoDedados();

/** Inserindo dados ***/

$novo->settabela("pessoa");

$novo->setcampos("nome,email");

$novo->setdados("'Rebeca','rebeca@yahoo.com.br'");

$novo->inserir();

/** Excluindo dados dados */

$del->settabela("pessoa");

$del->setValorNatabela("email");

$del->setvalorPesquisa("astro@3mainformatica.com.br");

$del->excluir();


/** Alterando dados */

$alt->settabela("pessoa");
$alt->setcampos("nome='Marcos Mauricio',email='marcos@3mainformatica.com.br'");
$alt->setValorNatabela("id_pessoa");
$alt->setvalorPesquisa("23");
$alt->alterar();


echo $alt->getMsg();

