<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/01/2015
 * Time: 10:21
 */

function conecta_banco(){

    $host = "localhost";
    $user = "hg3ma312";
    $pass = "planetahost13";
    $banco = "hg3ma312_registros";
    $conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
    mysql_select_db($banco) or die(mysql_error());

}

function registrando_entrada(){

    $seunav = $_SERVER['HTTP_USER_AGENT'];
    $seuip = $_SERVER['REMOTE_ADDR'];

    print "$seuip" . "<br>";


    $datacastro = date('y-m-d h:i:s');
    $inseredados = mysql_query("INSERT INTO visitantes (ip, data) VALUES ( '$seuip' , '$datacastro', '$seunav' )");
    $qrConsulta = mysql_query("SELECT * FROM visitantes");


}

function exibir_dados(){


    $sql = "SELECT * FROM visitantes";
    $query = mysql_query($sql);
    $verifica = mysql_num_rows($query);

    if ($verifica > 0 ) {
        while ($linha = mysql_fetch_array($query)) {
            $ipaparece = $linha['ip'];
            $seunav = $linha['navegador'];
            $dataaparece = $linha['data'];



            echo "<strong> Nome:</strong> $ipaparece";
            echo "<br/>";
            echo "<strong>Endereco:</strong>   $dataaparece";
            echo "<br/>";

        }

    }