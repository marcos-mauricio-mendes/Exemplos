<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 26/01/2015
 * Time: 23:20
 */

include_once ("conecta_com_Mysql.php");

class manipulacaoDeDados extends  conecta_com_Mysql{

    protected $sql;
    protected $tabela;
    protected $campos;
    public    $dados;
    protected $msg;
    protected $valorNaTabela;
    protected $valorPesquisa;

    //set modifica um valor de atributo e get recebe um valor
    public function setTabela($tbl){

        $this->tabela = $tbl;
    }

    //set modifica  e get recebe um valor
    public function setCampos($campo){

        $this->campos = $campo;
    }

    //set modifica  e get recebe um valor
    public function setDados($dado){

        $this->dados = $dado;
    }

    //função get para retornar apenas um valor
    public function getMsg(){

        return $this->msg;

    }

    //função de deleção de dados
    public function setvalorNaTabela($val){

        $this->valorNaTabela = $val;

    }

    //função de deleção de dados
    public function setvalorPesquisa($pesq){

        $this->valorPesquisa = $pesq;
    }
    //função de inserir em meu banco

    public function inserir(){

        $this->sql = "INSERT INTO $this->tabela ($this->campos) VALUES ($this->dados)";

        //chamar o metodo da classe pai
        //self::executarSQL($this->sql)
        if (self::executarSQL($this->sql)) {


            $this->msg = "Registro cadastrado com sucesso...";

        }
    }

    //Excluir dados em meu banco
    public function excluir(){

        $this->sql = "DELETE FROM $this->tabela WHERE $this->valorNaTabela = '$this->valorPesquisa'";

        if(self::executarSQL($this->sql)){

            $this->msg = "Registro excluido com sucesso...";

        }
    }

    //Alterar dadoss em meu banco
    public function alterar(){

        $this->sql = "UPDATE $this->tabela SET $this->campos WHERE $this->valorNaTabela = '$this->valorPesquisa'";

        if(self::executarSql($this->sql)){

            $this->msg = "Registro alterado com sucesso";


        }

    }



} 