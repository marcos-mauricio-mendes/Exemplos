<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 15/01/2015
 * Time: 18:40
 */
    include_once "coneccaoMysql.php";

class manipulacaoDedados extends coneccaoMyqsl{

        protected   $sql;
        protected   $tabela;
        protected   $campos;
        protected   $dados;
        protected   $msg;
        protected   $valorNatabela;
        protected   $valorPesquisa;

        public function settabela($tabelas){
            $this->tabela = $tabelas;
        }

        public function setcampos($campos){
            $this->campos = $campos;
        }

        public function setdados($dados){
            $this->dados = $dados;
        }

        public function getMsg(){

            return $this->msg;

        }

    //Metodo excluir
        public function setValorNatabela($val){


            $this->valorNatabela = $val;
        }

        public function setvalorPesquisa($pesq){

            $this->valorPesquisa = $pesq;

        }
     //Metodo inserir
        public function inserir(){

            $this->sql = "INSERT INTO $this->tabela ($this->campos) VALUES ($this->dados)";

            if(self::executarSQL($this->sql)){

                $this->msg = "Registro cadastrado com sucesso....";

            }
        }
    //Metodo exluir
        public function excluir(){

            $this->sql = "DELETE FROM $this->tabela WHERE $this->valorNatabela = '$this->valorPesquisa'";

            if(self::executarSQL($this->sql)){

                $this->msg = "Registro excluido com sucesso....";

            }

        }
    //Metodo alterar
        public function alterar(){

            $this->sql = "UPDATE $this->tabela SET $this->campos WHERE $this->valorNatabela = '$this->valorPesquisa'";

            if(self::executarSQL($this->sql)){

                $this->msg = "Registro Alterado Com sucesso....";

            }


        }



}