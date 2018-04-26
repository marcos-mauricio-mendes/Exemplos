<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/01/2015
 * Time: 22:06
 */

include_once "Coneccao_banco_procedural.php";

$sql = "DELETE FROM pessoa WHERE email = 'rebeca@aol.com.br'";

mysql_query($sql) or die ("Não foi possivel excluir os dados");

echo "Excluido com sucesso";