<html>
<header>

    <meta charset="utf-8">
    <title>Resultado da Votação</title>
    <link rel="stylesheet" href="../estilo/estilo.css" type="text/css" media="screen" />

</header>
<body>
<div class="tipo" ><br/><a href="javascript:history.go(-1)">Para voltar Rápido</a><br>


<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 04/01/2015
 * Time: 15:46
 */






// function calcularMedia(){

    $n1 = isset($_POST['valor1'])?$_POST['valor1']:1;
    $n2 = isset($_POST['valor2'])?$_POST['valor2']:1;
    $n3 = isset($_POST['valor3'])?$_POST['valor3']:1;

    $media = ($n1 + $n2 + $n3) / 3;

//    return $media;

/** } **/


/** Imprimindo minha função casildis isso aqui vai ajudar para caramba **/
//print calcularMedia();

print $media;

?>

</div>
</body>
</html>
