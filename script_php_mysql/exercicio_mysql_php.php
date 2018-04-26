<?php require_once "conecta.php"; ?>
<?php conectabanco(); ?>

<?php

$sql = "INSERT INTO pedido  VALUES ('9939','5355','2322','1','')";

$qry = mysql_query($sql);

echo $qry;


$sql2 = "UPDATE pedido SET data = '2015-12-13' WHERE data is null";

$qry2 = mysql_query($sql2);

$sql3 = "DELETE FROM pedido WHERE id_vendedor = 9939";

$qry = mysql_query($sql3);


SELECT * FROM PEDIDO


SELECT PEDIDO.num_pedido, PEDIDO.prazo_entrega, CLIENTE.cliente 
FROM PEDIDO,CLIENTE 
WHERE PEDIDO.id_cliente  = CLIENTE.id_cliente

SELECT pedido.num_pedido,pedido.prazo_entrega,cliente.cliente FROM cliente INNER JOIN pedido on pedido.id_cliente = cliente.id_cliente


	//Pesquisa em minha Tabela cliente e minha tabela pedido quais são as vendas do vendedor 209
	public function pesquisa(){
	$sql = "SELECT * FROM cliente INNER JOIN pedido ON cliente.id_cliente = pedido.id_cliente WHERE pedido.id_vendedor = 209";
	$qry = mysql_query($sql);

	}
	public function imprime(){
	
	
	
	}
	
	$p->pesquisa();
?>