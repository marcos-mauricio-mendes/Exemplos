<?php

	class pesquisa_rapida{
	
	public $servidor;
	public $usuario;
	public $senha;
	public $conecta;
	public $db;
	public $sql;
	public $qry;
	public $resultado;
		
	function __construct(){

    $this->servidor = "localhost";
    $this->usuario = "root";
    $this->senha = "";
    $this->conecta = mysql_connect($this->servidor, $this->usuario, $this->senha) or die("N�o foi possivel conectar ao servidor");
    $this->db = mysql_select_db("curso_mysql", $this->conecta) or die ("Nao foi possivel conectar ao banco de dados");
		
	}
	
	public function pesquisa($valor){
	$this->sql = $valor;
	$this->qry = mysql_query($this->sql);

	}
	
	public function imprime(){
	
	while($this->resultado = mysql_fetch_assoc($this->qry)){
	
		
	echo "<table>"; 
	echo "<tr><td>|Nome do Cliente:</td>";
	echo "<td>". $this->resultado["cliente"] . " |Pedido: " . $this->resultado["num_pedido"] . "| Vendedor desta venda ID |: " . $this->resultado["id_vendedor"] . "</td></tr>";
	}
	
	}
			
	}
	
	$p = new pesquisa_rapida();
	$p->pesquisa("SELECT * FROM cliente INNER JOIN pedido ON cliente.id_cliente = pedido.id_cliente WHERE pedido.id_vendedor = 209");
	$p->imprime();
	
		
	?>