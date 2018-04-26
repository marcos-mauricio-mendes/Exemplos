<html>
<header>

    <!--aulas 05 função strcmp comparação de maiusculo e minusculo-->

    <meta charset="utf-8">
    <title>Formulário String</title>
    <link rel="stylesheet" href="../estilo/estilo.css" type="text/css" media="screen" />

</header>
<body>
<div class="tipo" ><br/><a href="javascript:history.go(-1)">Para voltar Rápido</a><br>

    <?php
    /** Comando strcmp() compara dois campos identicos **/
    /** Comando strcasecmp() faz a mesma coisa que o comando strcmp() mas sem distinção de maiusculo e minusculo */

    $txt1 = isset($_POST['d1'])?$_POST['d1']:1;
    $txt2 = isset($_POST['d2'])?$_POST['d2']:1;


    if(strcmp($txt1,$txt2) !=0){

        echo "Valores diferentes";

    }else{

        echo "Os valores iguais senha ok";

    }

    ?>

</div>
</body>
</html>



