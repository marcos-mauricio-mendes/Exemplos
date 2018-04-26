<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/01/2015
 * Time: 18:41
 */

include_once "Coneccao_banco_procedural.php";


$email = "jorge@3mainformatica.com.br";
$nome  = "Jorginho Doido";

//inserindo a pesquisa em minha variavel

$sql = "INSERT INTO  pessoa (id_pessoa,nome,email) VALUES ('NULL','Astrogildo','astro@3mainformatica.com.br')";

//Fazendo a query
mysql_query($sql) or die ("Não foi possivel inserir os dados");