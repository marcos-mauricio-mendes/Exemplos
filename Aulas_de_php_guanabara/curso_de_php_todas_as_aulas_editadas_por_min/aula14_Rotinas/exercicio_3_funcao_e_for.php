<html lag="pt-br">
<head>
    <title>Exercicio de Função</title>
    <meta charset="utf-8">
	
	</head>
<body>


<?php

//Calcula os valores passados para a função somar imprime ná tela

function soma () {
    
    // Pega todos o argumentos e coloca em um vetor no caso $p inicia sempre com 0
    $p = func_get_args();
    // Vai retorna o numero de algumentos que si encontra em soma 
    $t = func_num_args();
    
    $s = 0;
    
    //Vai percorer meu vetor e somar os valores pedidos
    for($i=0; $i<$t; $i++){
    
        $s += $p[$i];
    
    
    }
    return $s;


}
//vai receber o valor dá função
$r = soma(1,2,4,5,6,7,8,9,10);

echo "A soma dos valores é $r";


?>
    
    
    
    </body>
</html>