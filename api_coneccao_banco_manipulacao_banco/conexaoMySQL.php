<?php

/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 16/08/2018
 * Time: 17:22
 */
 
abstract class conexaoMySQL
{
// Variaveis Protegidas - Pode ser apenas acessadas dentro desta Classe
    protected    $servidor;
    protected    $usuario;
    protected    $senha;
    protected    $banco;
	protected    $conexao;
	protected    $qry;   //Onde ficará armazenado as consultas do Mysql.
	protected    $dados;
	
// Metodo de Carregamento das variaveis para Realizamos Sua Conecção com o Servidor e Banco de Dados Generico
public function __construct()
{
        $this->servidor  = "localhost";
        $this->usuario   = "root";
        $this->senha     = "";
        $this->banco     = "exemploFinal";
		self::conectar();            //carrega automaticamente o metodo conectar() para conecção automatica com o Banco
}

// Metodo de coneccao com o banco - retorna caso de erro...
function conectar()
{

    $this->conexao = @mysqli_connect($this->servidor,$this->usuario,$this->senha) or die ("Não foi possivel conectar com o banco de dados").mysqli_error();
	
	$this->banco   = @mysqli_select_db($this->conexao,$this->banco) or die ("Não foi possivel conectar com o banco de dados").mysqli_error();
}


// Metodo Para Executar qual quer comando do Mysqli - $sql será o parametro do Mysql onde ficará armazenado.
// O comando com ' @ ' é para não mostrar as mensagens de erro do Mysqli
function executarSQL($sql)
{
	$this->qry = mysqli_query($this->conexao,$sql) or die ("Erro ao executar o comando SQL: $sql <br>");
	return $this->qry;
}

function listar($qr)
{
	$this->dados = mysqli_fetch_assoc($qr);
	return $this->dados;

	
}

	
	
	
	}








