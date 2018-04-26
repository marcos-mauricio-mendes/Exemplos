<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/01/2015
 * Time: 17:32
 */

include_once "class/coneccaoMysql.php";


    $con = new coneccaoMyqsl();


    $qrv = $con->executarSQL("select * from pessoa");



        while($linha = $con->listar($qrv)){

            echo $linha['nome']."<br>";


        }