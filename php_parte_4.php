<!DOCTYPE html>
<html lang="pt_BR">
<head>

    <meta charset="utf-8">
    <title>Estudos Data e Hora</title>
    <link rel="stylesheet" href="estilo/estilo.css" type="text/css" media="screen" />
    <!-- Estes aquivos script.php é onde estão a maioria dos scripts desta página -->
    <?php require_once "script_data_hora/script_data_hora.php"; ?>


</head>
<body>
<section>
<header>
</header>
<nav>
    <ul>
        <li><a href="http://www.3mainformatica.com.br/estudos/curso_mJailton/">Inicio</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/curso_mJailton/curso_javaScript_modulo_1/aulas_javaScript.html">JavaScript P_1</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/curso_mJailton/curso_javaScript_modulo_1/aulas_java_script_o_o/oo.html">JavaScript P_2</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/curso_mJailton/curso_php_parte_1/php_parte_1.php">PHP P_1</a></li>
        <li><a href="#">PHP P_2</a></li>
        <li><a href="#">Modulo 5</a></li>
        <li><a href="#">Modulo 6</a></li>
        <li><a href="#">Modulo 7</a></li>
        <li><a href="#">Modulo 8</a></li>
        <li><a href="#">Modulo 9</a></li>
        <li><a href="#">Modulo 10</a></li>
    </ul>
</nav>
<article>
<div id="content">
<h1>Data Hora - Trabalhando com PHP</h1>
<h3>Aula - 02 - 03 - 04 - 05 - 06 - 07 - 08</h3>
    <p>Mostrando a data em tela <span>date()</span></p>
    <p><span>date_default_timezone_set()</span> Configurando a formatação da data em meu servidor</p>
    <h3>Parametros do comando date</h3>

        <ul>
            <li><span>d -  </span> Representa o dia do mês (02 digitos)</li>
            <li><span>D - </span> Representa o dia do mês por extenço</li>
            <li><span>m - </span> Representa o mes com (02 digitos)</li>
            <li><span>M - </span> Representa o nome do mês</li>
            <li><span>y - </span> Representa o ano só com 2 digitos</li>
            <li><span>Y - </span> Representa o ano com 4 digitos</li>
            <li><span>l - </span> Retorna o nome completo do dia</li>
            <li><span>F - </span> Representa o nome do mês completo</li>
            <li><span>j - </span> Representa o dia do mês sem zero</li>
            <li><span>n - </span> Representa o més sem o zero</li>
            <li><span>t - </span> Quantidade dos dias do mês</li>
            <li><span>z - </span> Representa quantos dias percoreu durante o ano</li>
            <li><span>i - </span> Verifica se é horario de verão 0 - não e 1 - sim</li>
        </ul>
    <p>Trabalhando agora com as horas</p>
    <ul>
        <li><span>h</span> - (12 horas)</li>
        <li><span>H</span> - (24 horas)</li>
        <li><span>i</span> - Minutos (dois digitos)</li>
        <li><span>s</span> - Segundos (dois digitos)</li>
        <li><span>a</span> - am ou pm</li>
        <li><span>A</span> - AM ou PM</li>
        <li><span>g</span> - Retorna o foramato sem o zero, no (formato de 12h)</li>
        <li><span>G</span> - Retorna sem zero (formato de 24h)</li>
        <li><span>T</span> - Retorna o fuso horario</li>
        <li><span>U</span> - Segundos ná era Unix desde de 1970</li>
        <li><span>w</span> - Representa o numerodo dia da semana</li>
        <li><span>I</span> - Representa o numero da semana em anos</li>
        <li><span>L</span> - Representa um ano bi-sexto</li>

    </ul>



<?php tipo_css1();?>

<?php aula_00();?>

<?php tipo_css_fecha1();?>

    <hr>
    <h3>Aula - 03 - Trabalhando com time()</h3>
    <p><span>time()</span> Padrão unix para calcular o tempo em segundos</p>



    <?php tipo_css1();?>

    <?php aula_09();?>

    <?php tipo_css_fecha1();?>
<hr>
    <h3>Aula 10 - </h3>
    <p><span>time()</span> É possivel retornar o valor gerado pelo time() com o comando date()</p>

    <?php tipo_css1();?>

    <?php aula_10();?>

    <?php tipo_css_fecha1();?>
    <h3>Aula 11 - strtotime() </h3>
    <p><span></span>Utilizando variação de dados de datas</p>

    <?php tipo_css1();?>

    <?php aula_11();?>

    <?php tipo_css_fecha1();?>
    <hr>
    <h3>Aula 12 - Trabalhando com somas de datas</h3>
    <p><span>hours</span></p>
    <p><span>minutes</span></p>
    <p><span>seconds</span></p>
    <p><span>days</span></p>
    <p><span>months</span></p>
    <p><span>years</span></p>
    <?php tipo_css1();?>

    <?php aula_12();?>

    <?php tipo_css_fecha1();?>
   <hr>
    <h3>Aula 13 - mktime() Somandos dados Importantes</h3>
    <p><span></span></p>
    <?php tipo_css1();?>

    <?php aula_13();?>

    <?php tipo_css_fecha1();?>
    <hr>
    <h3>Aula 14 - 15 </h3>
    <p><span></span></p>
    <?php tipo_css1();?>

    <?php
    $data = "09/01/2015";

    echo $data2 = somar_data($data,1,2,0);
    ?>

    <?php tipo_css_fecha1();?>
    <hr>

    <h3>Aula 16 </h3>
    <p><span></span>Script bem simples para alteração de formato de datas</p>


    <?php tipo_css1();?>

    <?php
    $data = "09/01/2015";

    $data2 = dataBr($data,1);

    echo $data2;

        ?>
    <?php tipo_css_fecha1();?>
    <hr>
    <h2>Data Hora - Tempo</h2>
    <form method="post" action="script_data_hora/script_data_hora.php">

        Data <input type="date"  name="datinha" id="datinha" >

        <button>Click Aqui</button>
    </form>
    <hr>
</div>
<aside>


    <p>A noção em senso comum de tempo é inerente ao ser humano, visto que todos somos, em princípio, capazes de reconhecer e ordenar a ocorrência dos eventos percebidos pelos nossos sentidos. Contudo a ciência evidenciou várias vezes que nossos sentidos e percepções são mestres em nos enganar. A percepção de tempo inferida a partir de nossos sentidos é estabelecida via processos psicossomáticos, onde variadas variáveis, muitas com origem puramente psicológica, tomam parte, e assim como certamente todas as pessoas presenciaram em algum momento uma ilusão de ótica, da mesma forma de que em algum momento houve a sensação de que, em certos dias, determinados eventos transcorreram de forma muito rápida, e de que em outros os mesmos eventos transcorreram de forma bem lenta, mesmo que o relógio - aparelho especificamente construído para medida de tempo - diga o contrário.</p>

    <p>Embora os pesquisadores não tenham encontrado evidências de um único "órgão do tempo" no cérebro, e de que ainda há muito por se descobrir em relação aos processos cerebrais responsáveis pela nossa percepção de passagem do tempo Nota 1 , é certo que o conceito baseado em senso comum é muito pouco preciso para mostrar-se confiável ou mesmo útil na maioria das situações, mesmo nas práticas onde estamos acostumados a utilizá-lo. A exemplo, todos certamente já afirmaram, de forma a mais natural: "o tempo corre", "este ano passou depressa" ou mesmo "esta aula não acaba". Uma definição científica mais precisa faz-se certamente necessária, e com ela ver-se-á, entre outros, que o tempo, em sua acepção científica, não flui.</p>

</aside>




<footer>
    <ul>

        <li><a href="http://www.3mainformatica.com.br/">3MA</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/(INSTALADOR%20DE%20BOOT%20PEN).tar">Boot em Pendriver </a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/ITIL_COBIT_PMP/material.html">ITIL e COBIT</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/servidorproxy.html">Brasil FW</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/Linux_configuracao_material_estudo/material_linux.php">Linux Estudos</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/Material_leitura/material_leitura.php">Leitura</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/TRANSFORMAR%20NGR_ISO.tar">NGR em ISO</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/aulas_css_html_javascript/index.html">Aulas de HTML, CSS e JavaScript</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/comandos_linux.html">Comandos Linux</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/kit_manutecao.tar">Kit de Manutenção</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/programas_web_uteis/">Programas da Web</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/script_java_script/">JavaScript</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/scripts_dos/">Comandos do DOS</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/scripts_php/">Scripts em PHP</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/curso_html5/">Curso de HTML5</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/curso_mJailton/curso_javaScript_modulo_1/aulas_javaScript.html">Curso Web Master Mjailton Dez/2014</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/curso_php/">Curso de PHP 5.5 Dez/2014</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/enderecos_dns_velox_gvt.html">Endereço DNS Velox Gvt e Google</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/torrent/">Links do Torrent</a></li>
        <li><a href="">Curso de JQuery mais atual nov/2014 não postei ainda</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/">Estudos</a></li>
        <li><a href="http://www.3mainformatica.com.br/estudos/hardware/"><span class="detalhes">Hardware & Redes</span></a></li>

    </ul>
</footer>
</article>

</section>
</body>
</html>
