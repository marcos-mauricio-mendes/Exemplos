<?php require_once "conecta.php"; ?>
<?php conectabanco();?>

<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/01/2015
 * Time: 21:27
 */
//$sql = "DROP TABLE visitas";
//$sql = "CREATE DATABASE ZZZZ" ;
$data = date("Y-m-d");
/*** Insere Valor ***/
//$sql = "INSERT INTO cliente (id_cliente,cliente, email, data, ativo) VALUE (NULL,'Jose Eustaquio','jose@gmail.com','$data','S')";
/*** Alterar Valor em um campo expecifico***/
//$sql = "UPDATE cliente SET cliente ='Mauricio', email = 'mauricio3ma@gmail.com' WHERE id_cliente = 1 ";
/*** Excluido dados em uma Tabela ***/
//$sql = "DELETE FROM cliente WHERE id_cliente = 4";
/*** Pesquisando em meu Banco ***/
//$sql = "SELECT * FROM cliente WHERE id_cliente = '1'";
/*** Transformando em array  e imprimindo como matriz associativa ***/

$sql = "SELECT * FROM cliente ";

$qry = mysql_query($sql);

/** Transformando a pesquisa em array

$resultado = mysql_fetch_array($qry);

***************************************/
/** Percorendo todos os campos do meu array **/

while($resultado = mysql_fetch_array($qry)){

if($qry){

    echo "Criado com sucesso"."<br>"."<br>";
    echo $qry . "<br>" . "<br>";
    echo "Codigo: " .          $resultado["id_cliente"] . "<br>";
    echo "Cliente: " .         $resultado["cliente"] . "<br>";
    echo "Email: "  .          $resultado["email"] . "<br>";
    echo "Data_Cadastro: " .   $resultado["data"] . "<br>";
    echo "Ativo: " .           $resultado["ativo"] . "<br>";

}else{


    echo "Não foi possivel inserir os dados " . mysql_error();
}


}

/**** Percorendo a tabele e imprimindo todos os valores ***/
