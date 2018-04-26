<meta charset="UTF-8">
    <style>div {text-align: center;} .tamanho{  width: 400px;} </style>
<div>
<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 09:43
 * Criando o executavel para a Pessoa
 */

    include_once "class/Pessoa.php";
    include_once "class/Conta.php";
    include_once "class/ContaCorrente.php";
    include_once "class/ContaPoupaca.php";

    //Criando Objetos
    $p  = new Pessoa("0001","Marcos Mauricio",1.75,20);
    $cc = new ContaCorrente("110-8","2226-66","15/20/2014","Marcos Mauricio Mendes Alves",500,100);
    $cp = new ContaPoupaca("000-8","111-66","15/20/2014","Iranilda Regina",300,15);



    $p->Imprimir();

    $p->crescer(50);

    $p->Imprimir();

    $p->envelhecer(20);

    $p->Imprimir();

    echo "<hr class='tamanho'>"."<br>";

     echo  "  Antes do deposito no nome " . $p->nome . $cp->Versaldo() . "<br>"."<br>";

    $cp->Depositar(100);

    echo " Depois do deposito no nome " . $p->nome.  $cp->Versaldo() . "<br>" ."<br>";


    echo  "  Antes do saque no nome " . $p->nome . $cp->Versaldo() . "<br>"."<br>";

    $cp->Sacar(300);

    echo " Depois do saque no nome " . $p->nome.  $cp->Versaldo() . "<br>" ."<br>";