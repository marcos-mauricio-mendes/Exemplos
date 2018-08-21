<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 17/08/2018
 * Time: 21:37
 * Para o Funcionamento desta classe basta criar um banco generico , onde posteriormente utilizamos os metodos incluir,
 * excluir, alterar  e listar. O metodo listar encontra-se de sua Herança - basta carregar ela e percorrer o ARRAY[];
 *
 *
 */

// Chamando minha conecção com o Banco de Dados

include_once "conexaoMySQL.php";

class manipulacao_de_dados extends conexaoMySQL
{
    //Variaveis Protected só podem ser modificados ná classe ou herdados
    protected $sql;
    protected $tabela;
    protected $campos;
    protected $dados;
    protected $msg;
	protected $valorNaTabela;
	protected $valorPesquisa;

    // - Como os campos estão protegidos, para realizarmos as alterações das variaveis tabela,campos e dados utilizo o set para capturar elas antes de ficarem protegidas.
    // - Por isso o set ná frente do Metodo que carrega as variaveis protegidas.
    public function setTabela ($tbl)
    {
        $this->tabela = $tbl;
    }
    public function setCampos ($campo)
    {
        $this->campos = $campo;
    }
    public function setDados ($dado)
    {
        $this->dados = $dado;
    }
	public function getMsg()
	{
		return $this->msg;
	}
	public function setValorNaTabela($val)
	{
		$this->valorNaTabela = $val;
	}
	public function setValorPesquisa($pesq)
	{
		$this->valorPesquisa = $pesq;
		
	}
    // Inserir dados em minha Tabela
    public function inserir()
    {
         // Alterando o SQL para retornar um valor solicitado

        $this->sql = "INSERT INTO $this->tabela ($this->campos) VALUES ($this->dados)";

		// Chamando o metodo proprio da classe para execução da query com o comando self

        self::executarSQL($this->sql);   
    }
    //Excluir Dados em minha Tabela
	public function excluir()
	{
		// Alterando o SQL para deletar um valor solicitado. Basta selecionar os campos do Mysqli

		$this->sql = "DELETE FROM $this->tabela WHERE $this->valorNaTabela = '$this->valorPesquisa'";

		//Chamando o metodo proprio da classe para execução da query com o comando self
		self::executarSQL($this->sql);
		if(self::executarSQL($this->sql))
		{
			$this->msg = "Registro excluido com sucesso...";
			
		}		
	}
	//Alterar dados em minha tabela
    public function alerar()
	{
		
	   $this->sql = "UPDATE $this->tabela SET $this->campos WHERE $this->valorNaTabela = '$this->valorPesquisa'";
		if(self::executarSQL($this->sql))
		{
			$this->msg = "Registro aletrado com sucesso...";
			
		}		
	}

	
	    /* FIM */

}

