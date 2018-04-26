<html>
<header>

    <meta charset="utf-8">
    <title>Resultado da Votação</title>
    <link rel="stylesheet" href="../estilo/estilo.css" type="text/css" media="screen" />

</header>
<body>
<div class="tipo" ><br/><a href="javascript:history.go(-1)">Para voltar Rápido</a><br>

    <?php

    $vota = $_POST["vota"];

    $votos = 1;
    $a = 0;

    switch ($vota) {


        case 1:

            $candidato1 =  $a + $votos;

            break;
        case 2:


            $candidato2 =  $a + $votos ;

            break;
        case 3:

            $candidato3 =  $a + $votos ;

            break;
        case 4:

            $candidato4 =  $a + $votos ;

            break;



    }


    if(($candidato1 > $candidato2) && ($candidato1 > $candidato3) && ($candidato1 > $candidato4)) {

        print "O Candidato 1 ganhou as eleições com : " . $candidato1 . " " . " votos " .  "<br>";

    }elseif(($candidato2 > $candidato1) && ($candidato2 > $candidato3) && ($candidato2 > $candidato4)) {

        print "O Candidato 2 ganhou as eleições com : " . $candidato2 . " " . " votos " .  "<br>";


    }elseif(($candidato3 > $candidato1) && ($candidato3 > $candidato2) && ($candidato3 > $candidato4)) {

        print "O Candidato 3 ganhou as eleições com : " . $candidato3 . " " . " votos " . "<br>";

    }elseif(($candidato4 > $candidato1) && ($candidato4 > $candidato2) && ($candidato4 > $candidato3)) {

        print "O Candidato 4 ganhou as eleições com : " . $candidato4 . " " . " votos " . "<br>";

    }

    ?>

</div>
</body>
</html>
