<html>
<header>

    <!--aulas-->

    <meta charset="utf-8">
    <title>Formulário String</title>
    <link rel="stylesheet" href="../estilo/estilo.css" type="text/css" media="screen" />

</header>
<body>
<div class="tipo" ><br/><a href="javascript:history.go(-1)">Para voltar Rápido</a><br>

    <?php
    /** Comando strspn() **/


    $txt1 = isset($_POST['b1'])?$_POST['b1']:1;
    $txt2 = isset($_POST['b2'])?$_POST['b2']:1;


    $quant = strspn($txt1,$txt2);


    print "Comparando os valores entre duas strings" . "O valor e:" . $quant . "<br>" . "<br>";

    if($quant == strlen($txt1)){

        print "Não é permitido somente numero tem que ter caracteres e numeros" ."<br>" ."<br>";


    }

    ?>

</div>
</body>
</html>



