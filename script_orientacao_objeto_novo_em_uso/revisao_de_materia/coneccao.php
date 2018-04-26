<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 24/01/2015
 * Time: 19:14
 */

include_once ("class/conecta_com_Mysql.php");

$con = new conecta_com_Mysql();

$qry = $con->executarSql("select * from pessoa");



while ($linha = $con->listar($qry)){


    echo $linha["nome"]."<br>";


}

