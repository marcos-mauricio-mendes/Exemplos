<html lag="pt-br">
<head>
    <title>Exercicio de Vetor</title>
    <meta charset="utf-8">
	
	</head>
<body>
  
    <div>
        
        <table border="1"><tr>
    <?php

    //exercicio 2

    $n = range(5,50,1);

    foreach($n as $v){
        
    echo "<td>$v";
    
    }


    ?>
            
    </table>
    <br />
    <?php    

    //exercicio 3 excluindo uma posição de um vetor

    $v = array( 3=>5,
                1=>9,
                0=>8,
                7=>7 );
     
    unset($v[0]);
        print_r($v);

    
    ?>
        
    <br />
    
    <?php
        
        //exercicio 4 Chaves Associativas
        
        $cad = array("nome"=>"Ana","idade"=>23,"peso"=>78.5);

            print_r($cad);


            echo "<br>Agora criando mais uma extenção em meu vetor<br>";

        $cad["fuma"] = true;

            print_r($cad);

        ?>
        
        <br><br><br><br>
        <p>-------------------------------------------------------------------</p>
        <?php

            //exercicio 5 matriz

            $m = array(array(6,4), array(4,9), array(3,2));
    

            $m[0][1] = $m[2][0];
                
                print_r($m);

        ?>
    
        
    </div>
        
    </body>
</html>