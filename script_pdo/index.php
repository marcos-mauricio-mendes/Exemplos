<meta charset="UTF-8">
<?php
/* 
 * Curso de PDO criando a conexão com o Banco de Dados
 */
try {
    $conexao = new PDO("mysql:host=localhost;dbname=estudopdo","root","");
    
    //$sql = "INSERT into cliente (nome, email) values ('Mauricio','marcos@gmail.com')";
    //$sql = "UPDATE cliente set ativo = 'S' where nome like '%Ma%' ";
    //$sql = "SELECT * from cliente";
    //$sql = "DELETE from cliente where email = 'jairo@gmail.com'";
    
    //Protegendo o codigo do malicioso  sql - injection
    //Para chamar o arquivo externo basta digitar uma "?" e posteriormente determinar um determinado valor para sua instrução
    //$id = $_GET['id'];
    //$sql = "SELECT * from cliente where id_cliente = ?";
    $produto = $_GET['produto'];
    $preco   = $_GET['preco'];
    $sql ="insert into produto (produto, preco) value (?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $produto);
    $stmt->bindValue(2, $preco);
    $stmt->execute();
    $linha = $stmt->fetchAll (PDO::FETCH_ASSOC);
    
    
    /**
    $stmt = $conexao->query($sql);        
    $resultado = $stmt ->fetchAll(PDO::FETCH_CLASS);
    
    
   // for($i=0;$i<$stmt->rowCount();$i++)
   //   echo $resultado[$i]['nome']."<br>";
        
    foreach ($resultado as $cli){    
    print $cli->nome . "<br>";
    }
    
    foreach ($conexao->query($sql) as $cliente){
       
        print $cliente['email']."<br>";
    }
    print "<pre>";
    print_r($resultado);
    print "</pre>";
    **/
    
    print "<pre>";
    print_r($linha);
    print "</pre>";
     //$resultado = $conexao->exec($comando);
    //print "Quantidade de linhas afetadas: ". $resultado;
}catch (PDOException $e){
    // Tratamento de erros com PDO
    print "Não foi possivel realizar a sua conecção, ERRO:" . $e->getCode();
    // se der algum erro entra nesse código
}
