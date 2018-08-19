<?php
/** 
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/06/2018
 * Time: 17:17
 */
    class coneccaoMysql {
        protected    $servidor;
        protected    $usurio;
        protected    $senha;
        protected    $banco;
        protected    $conecxao;
        protected    $qry;
        protected    $dados;
        protected    $ver;
            //Metodo Construtor
        public function __construct(){
            $this->servidor = "localhost";
            $this->usurio   = "root";
            $this->senha    = "";
            $this->banco    = "exemplo";
            // Comando para executar o metodo da classe
            self::conectar();
        }
           //Metodo conectar
        function conectar(){
            $this->conecxao  = @mysqli_connect($this->servidor,$this->usurio,$this->senha,$this->banco) or
                die("******** Não foi possivel conectar com o servidor de banco de dados * ****").mysqli_error();
			$this->banco = @mysqli_select_db($this->conecxao,$this->banco) or
         die("Não foi possivel conectar com o Banco de dados").mysqli_error();
        }
        //Metodo executar
        function executarSQL($sql){
            $this->qry = mysqli_query($this->conecxao,$sql) or die("Erro ao executar o comando sql: $sql <br>");
            return $this->qry;
        }
        //Metodo Listar
        function listar($ql){
			
            $this->dados = @mysqli_fetch_assoc($ql);

            return $this->dados;
			
        }
        /**
         * @return mixed
         */
        public function getDados()
        {
            return $this->dados;
        }
		
				


	
	