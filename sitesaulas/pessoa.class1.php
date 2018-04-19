<?php
class pessoa{
	public $nome;
	public $sobrenome;
	public $idade;

	
	function __construct($nome,$sobrenome,$idade){
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->idade = $idade;
	}
	function __destruct(){
		echo "O objeto".$this->nome."foi destruido";
		
		}
	
	public function correr(){
		echo $this->nome."Está correndo";	
		
		
	}
	
	
}



?>