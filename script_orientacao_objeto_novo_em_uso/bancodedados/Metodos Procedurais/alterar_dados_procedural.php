<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/01/2015
 * Time: 22:39
 */

include_once "Coneccao_banco_procedural.php";

/** Alterando um campo de minha tabela **/

$sql = "UPDATE pessoa SET email = 'marcos@3mainformatica.com.br' WHERE id_pessoa = '1'";

mysql_query($sql) or die ("Não foi possivel alterar os dados");

