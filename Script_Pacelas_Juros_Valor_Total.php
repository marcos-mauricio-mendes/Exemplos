<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 03/08/2018
 * Time: 19:04
 */


$valor_parcela ="100";
$qunatidade_de_parcelas = "5";
$valor_produto_prazo ="0";
$taxa ="0.25"; //Taxa de Jutos Mês basta multiplicar por 20




for ($i=0; $i<$qunatidade_de_parcelas; $i++){
  
         echo "Parcela ";
         echo "<br>";
         echo $i+1;
	 echo "--<br>"; 
         $tudo = $valor_parcela / $qunatidade_de_parcelas * $taxa;
         echo "Juros e de ".  $t=$taxa*20 .",0%";
	 echo "<br>";
	 echo "Parcela com Juros ";
	 echo $tudo+$valor_parcela;
	 echo "<br><br><br>";
	 $soma += $taxa;
	 $somaproduto += $valor_parcela; 	 
    }
    
    echo "Total de Juros ". $soma*20 ."%"."<br>";
    echo " Quantidade de Parcelas " . $qunatidade_de_parcelas."<br>"; 
    echo " Valor do Produto: ". $somaproduto."<br>";
    echo " Valor Total do Produto com Juros: " . $total_geral=$somaproduto+($soma*20);
