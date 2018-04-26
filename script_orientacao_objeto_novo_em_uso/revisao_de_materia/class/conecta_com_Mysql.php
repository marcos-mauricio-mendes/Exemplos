<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 24/01/2015
 * Time: 18:59
 */

class conecta_com_Mysql {

    public $servidor;
    public $usuario;
    public $senha;
    public $banco;
    public $conexao;
    public $qry;
    public $dados;

    public function __construct(){

        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "exemplo";
        // Carrega o metodo dá propria classe
        self::conectar();


    }

    // Função conecção com o banco a variável conexão vai receber os dados para conecxão

    function conectar(){

        $this->conexao = @mysql_connect($this->servidor,$this->usuario,$this->senha) or

            die ("Não foi possivel conectar com o servidor de banco de dados").mysql_error();

        $this->banco = @mysql_select_db($this->banco) or

            die ("Não foi possivel conectar com o banco de dados").mysql_error();

    }


    function executarSql($sql){


        $this->qry = @mysql_query($sql) or die("Erro ao executar o comando sql: $sql <br>".mysql_error());

        return $this->qry;

    }

    function listar($qr){


        $this->dados= @mysql_fetch_assoc($qr);

        return $this->dados;


    }

}
