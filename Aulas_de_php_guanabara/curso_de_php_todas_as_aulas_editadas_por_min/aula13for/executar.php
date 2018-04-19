<!--exercicio de For-->
<html lag="pt-br">
<head>
    <title>Exercicio TABUADA </title>
    <meta charset="utf-8">
	
	</head>
<body>

<p></p>
<div>
<form method="post" action="tabuada.php" >


<p>Selecione o numero para ver sua tabuada:</p>
 
    
    <select name="num">
       <?php

    for($c = 1; $c<=10; $c++){
    
        echo "<option>$c</option>";
            
    }

    ?>
    </select>
<input type="submit" value="Ver Tabuada" />      


</form>
    
</div>


</body>
</html>