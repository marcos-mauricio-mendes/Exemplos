<meta charset="UTF-8">
<style>div {text-align: center;} .tamanho{  width: 400px;} </style>
<div>
<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 18:18
 */



    include_once "class/Pessoa.php";
    include_once "class/Conta.php";
    include_once "class/ContaCorrente.php";
    include_once "class/ContaPoupaca.php";
    include_once "class/ContaNova.php";

//Criando Objetos

    $conta1 = new ContaNova("110-8","modificado","15/20/2014","Marcos Mauricio Mendes Alves",500,100);

    echo $conta1->numconta . " Você tem o saldo de R$: " . $conta1->saldo;
