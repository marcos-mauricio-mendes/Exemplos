<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/01/2015
 * Time: 17:17
 */

    class coneccaoMyqsl {

        protected    $servidor;
        protected    $usurio;
        protected    $senha;
        protected    $banco;
        protected    $conecxao;
        protected    $qry;
        protected    $dados;

            //Metodo Construtor
        public function __construct(){

            $this->servidor = "localhost";
            $this->usurio   = "root";
            $this->senha    = "";
            $this->banco    = "exemplo";
            self::conectar();

        }

           //Metodo conectar
        function conectar(){

            $this->conecxao  = @mysql_connect($this->servidor,$this->usurio,$this->senha) or
                die("Não foi possivel conectar com o servidor de banco de dados").mysql_error();

            $this->banco = @mysql_select_db($this->banco) or
                die("Não foi possivel conectar com o Banco de dados").mysql_error();
        }


        //Metodo executar

        function executarSQL($sql){

            $this->qry = @mysql_query($sql) or die("Erro ao executar o comando sql: $sql <br>".mysql_error());

            return $this->qry;

        }


        //Metodo Listar
        function listar($ql){


            $this->dados= @mysql_fetch_assoc($ql);

            return $this->dados;

        }

        /**
         * @return mixed
         */
        public function getDados()
        {
            return $this->dados;
        }

    }
