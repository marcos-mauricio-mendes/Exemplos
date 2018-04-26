<?php

/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/01/2015
 * Time: 20:38
 */
/** Aula 03 - Função Para Conectar em meu Banco */

function conectabanco(){


    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $conecta = mysql_connect($servidor, $usuario, $senha) or die("Não foi possivel conectar ao servidor");
    $db = mysql_select_db("vendas", $conecta) or die ("Não foi possivel conectar ao banco de dados");
		//"funcoes_mysql"

}


