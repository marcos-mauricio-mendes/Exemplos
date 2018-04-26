<meta charset="UTF-8">
<?php
/**
 * Criando Coneccão com o Banco de Dados
 * User: Marcos
 * Date: 15/01/2015
 * Time: 16:55
 */



            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "exemplo";
            $coneccao =  mysql_connect($servidor,$usuario,$senha) or die ("Náo foi possivel conecatar ao servidor de banco de dados");

            mysql_select_db($banco,$coneccao) or die("Não foi possivel conectar com o Banco de Dados");

// Fazendo Pesquisa

    $sql = "select * from pessoa";
    $qrv = mysql_query($sql);

    while ($dados = mysql_fetch_assoc($qrv)) {


        echo $dados['nome'] . "<br>";
        echo $dados['email'] . "<br>";

    }
