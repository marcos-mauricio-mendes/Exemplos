<html>
<header>

    <meta charset="utf-8">
    <title>Resultado da Votação</title>
    <link rel="stylesheet" href="../estilo/estilo.css" type="text/css" media="screen" />

</header>
<body>
<div class="tipo" ><br/><a href="javascript:history.go(-1)">Para voltar Rápido</a><br>

    <?php

    $candidato1 = $_POST['can1'];

    $candidato2 = $_POST['can2'];

    $candidato3 = $_POST['can3'];

    $candidato4 = $_POST['can4'];






    if($candidato1 > $candidato2 && $candidato1 > $candidato3 && $candidato1 > $candidato4) {

        print "O Candidato 1 ganhou as eleições com : " . $candidato1 . " " . " votos " .  "<br>";

    }elseif($candidato2 > $candidato1 && $candidato2 > $candidato3 && $candidato2 > $candidato4) {

        print "O Candidato 2 ganhou as eleições com : " . $candidato2 . " " . " votos " .  "<br>";


    }elseif($candidato3 > $candidato1 && $candidato3 > $candidato2 && $candidato3 > $candidato4) {

        print "O Candidato 3 ganhou as eleições com : " . $candidato3 . " " . " votos " . "<br>";

    }elseif($candidato4 > $candidato1 && $candidato4 > $candidato2 && $candidato4 > $candidato3) {

        print "O Candidato 4 ganhou as eleições com : " . $candidato4 . " " . " votos " . "<br>";

    }

    ?>

</div>
</body>
</html>
