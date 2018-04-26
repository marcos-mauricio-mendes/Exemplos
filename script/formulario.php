<html>
<header>

    <meta charset="utf-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="../estilo/estilo.css" type="text/css" media="screen" />

</header>
<body>
<div class="tipo" ><br/><a href="javascript:history.go(-1)">Para voltar Rápido</a><br>

    <?php
    /** Aula de Formulários **/


    $a = $_POST['txt_email'];

    print "Seus dados aqui:" . " " . $a;
    ?>

</div>
</body>
</html>





