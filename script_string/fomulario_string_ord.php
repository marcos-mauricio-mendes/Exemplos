<html>
<header>

    <!--aulas 03 função chr() transforma um valor em numero dá tabela ascii -->

    <meta charset="utf-8">
    <title>Formulário String</title>
    <link rel="stylesheet" href="../estilo/estilo.css" type="text/css" media="screen" />

</header>
<body>
<div class="tipo" ><br/><a href="javascript:history.go(-1)">Para voltar Rápido</a><br>

    <?php
    /** Aula de Formulários **/


    $a = isset($_POST['dados'])?$_POST['dados']:1;


    print "Seus dados aqui: " . " " . ord($a);

    ?>

</div>
</body>
</html>




