<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 19/08/2018
 * Time: 15:01
 * Campo de listagem do meu Banco
 *
 */

 // Chamando a classe
include_once  "manipulacao_de_dados.php";


/*Listando o conteudo do Banco Formatando com HTML * Cuidado com as aspas e pontos tem que seguir o padrão para poder
imprimir com o comando echo
*/

class listagem extends manipulacao_de_dados
{

    public function listarCategoria()     // Imprimindo minha categoria
    {

        $qry  = self::executarSQL("SELECT * FROM categoria");
		//$qry2 = self::executarSQL("SELECT * FROM produto"); 
		echo '<tr><td height="5%"><font color="blue">Produtos</font></td></tr><br>';
        while ($linha = self::listar($qry))
        {


//imprimindo o cabecalho seguindo a linha descrita
echo '
    <td width="5%"></td>
    <tr>
	   <td height="20%">'. $linha['categoria'] .'</td> 
    </tr>' ;
        }
    }

    public function listarProduto()  // imprimindo os produtos
    {

        $qry = self::executarSQL("SELECT * FROM produto");
        echo '<tr><td height="5%"><font color="red">Linguagem de Programação</font></td></tr>';
        while ($linha = self::listar($qry))
        {


//imprimindo os produtos
            echo '
    <td width="5%"></td>
    <tr>
	    <td height="20%">'. $linha['produto'] .'</td>  
    </tr>' ;
        }


    }

   public function listarDescricaoProduto() //imprimindo a descricao dos Produtos
    {

        $qry = self::executarSQL("SELECT * FROM produto");
        echo '<tr><td height="5%"><font color="blue">Descricao dos Produtos</font></td></tr>';
        while ($linha = self::listar($qry))
        {


//imprimindo a descricao dos produto
            echo '
    <td width="5%"></td>
    <tr>
	    <td height="20%">'. $linha['descricao'] .'</td>  
    </tr>' ;
        }
	}
	
	
    public function listarUrlBanner() //Imprimir o Banner
    {

        $qry = self::executarSQL("SELECT * FROM banner");
        echo '<tr><td height="5%"><font color="orange">Banner links</font></td></tr>';
        while ($linha = self::listar($qry))
        {
//imprimindo a descricao dos produto
            echo '
    <td width="5%"></td>
    <tr>
	    <td height="20%">'. $linha['url'] .'</td>  
    </tr>' ;
        }




    }


	




}





