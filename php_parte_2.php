<!DOCTYPE html>
<html lang="pt_BR" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <title>Estudos Php 2</title>
    <link rel="stylesheet" href="estilo/estilo.css" type="text/css" media="screen" />
    <!-- Este aquivo script.php é onde estão a maioria dos scripts desta página -->
    <?php require_once "script_array/script_array.php";



    ?>


</head>
<body>
<section>
    <header>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">JavaScript P_1</a></li>
            <li><a href="#">JavaScript P_2</a></li>
            <li><a href="#">PHP P_1</a></li>
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

            <h1> PHP - ARRAY </h1>
            <br>
            <h4>Vamos lá primeiro comando com Array</h4>

            <br>
            <p>Imprimindo o array com o comando <span>print_r</span></p>

            <?php tipo_css1();?>

            <?php exercicio_();?>

            <?php tipo_css_fecha1();?>


            <hr>
            <h3>Aula 4 - Preenchendo Arrays</h3>
            <br>
            <p>Preenchendo Array comando <span>range()</span></p>
            <p> Usando o comando <span>range()</span> para preencher meu array de 2 em 2 e depois imprimir os impas</p>
            <br>
            <?php tipo_css1();?>

            <?php aula_4();?>

            <?php tipo_css_fecha1();?>
            <br>
            <p>Usando o comando <span>range()</span> para gerar uma array alfabetico de A ate Z</p>

            <?php tipo_css1();?>

            <?php aula_4emeio();?>

            <?php tipo_css_fecha1();?>
            <br>
            <p>Usando o comando <span>is_array()</span> Verifica se uma variável é um array, e retorna TRUE se não FALSE.</p>
            <p>Usei este comando ai em cima</p>
            <hr>
            <br>
            <h3>Aula 5 - Inserindo valores do inicio e no final e excluindo no inicio e no final do Arrays</h3>
            <p> Inserindo valores em meu array no inicio <span>array_unshift()</span> e no final <span>array_push()</span> remove no inicio <span>array_shift()</span> e exclui nó ultimo e aqui  <span>array_pop</span></p>
            <?php tipo_css1();?>

            <?php aula_5();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 6 - Localização em Array </h3>
            <p><span>in_array()</span> Ela busca um array por um valor expecifico retorna true si encontrado e false não encontrado</p>
            <p><span>array_key_exists</span> Ele busca em um array pelo valor da chave e retorna true si encontrado e false não encontrado</p>
            <?php tipo_css1();?>

            <?php aula_06();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3> Aula - 07 - Localizando Valores e retornando a chave de um Array</h3>
            <p> Vamos buscar valores de arrays <span>array_seach()</span> - busca em um array um valor especificado, retornando sua chave se localizada ou false se não for encontrado</span></p>
            <?php tipo_css1();?>

            <?php aula_07();?>

            <?php tipo_css_fecha1();?>

            <hr>

            <h3>Aula - 08 - Retornando os valores e as cheves de meu array</h3>
            <p><span>array_keys()</span> - Retorna de um array de todas as chaves </p>
            <p><span>array_value()</span> - Retorna todos os valores localizados em um array, automaticamente oferecendo a indexação numerica em um array</p>


            <?php tipo_css1();?>

            <?php aula_08();?>

            <?php tipo_css_fecha1();?>

            <br />
            <h3> Aula - 09 - Recuperando as chaves e os valores de um Array</h3>
            <p><span>key()</span> Retorna a chave localizada na atual posição do poteiro de array</p>
            <p><span>current</span> Reculpera o valor atual do array na posição do ponteiro</p>
            <p><span>each()</span> Recuperando a chave e o valor atual do array. Esse par é recornado de quatro elementos com as chave 0,1,key,value.</p>

            <?php tipo_css1();?>

            <?php aula_09();?>

            <?php tipo_css_fecha1();?>

            <br>
            <h3>Aula 10 - Movendo o ponteiro no Array mais expecificamente</h3>
            <p><span>next()</span> Movendo o ponteiro no array. next() Retorna o valor de array residente ná posição imediatamente seguinte ao ponteiro atual</p>
            <p><span>prev()</span> Movendo o ponteiro para posição anterior do array fiz ná mesma posição o que deu nada pois ali era o inicio</p>
            <p><span>reset()</span> Serve para colocar o ponteiro de volta a primeira posição</p>
            <p><span>end()</span> Serve para colocar o ponteiro ná útima possição</p>

            <p>Sintaxe <span>next(array array)</span>


                <?php tipo_css1();?>

                <?php aula_10();?>

                <?php tipo_css_fecha1();?>

            <hr>
            <br>
            <h3>Aula 11 - Determinando tamanho frequencia valores únicos de um Array</h3>
            <p><span>count()</span> Retorna o numero total de valores encontrados em um array</p>
            <p><span>siseof()</span> Retorna o numero total de valores encontrados em um array</p>
            <p><span>cont_value()</span> Conta quantos valores tem no array e os que si repetem com frequencia</p>
            <p><span>unique()</span> Determinando valores unicos no array. Ela remove todos os valores duplicados duplicados no array retornando o array constituido de valores unicos</p>

            <?php tipo_css1();?>

            <?php aula_11();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 12 - Ordenar e Clasificar um array</h3>
            <p><span>reverse()</span> Revertendo a ordem do array ou seja dos seus elementos, mas posso inserir um numero para preservar uma chave </p>
            <p><span>flip()</span> Invertendo os valores com as chaves do array </p>



            <?php tipo_css1();?>

            <?php aula_12();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 13 - Classificação de um Array </h3>
            <p><span>sort()</span>Classica de um array, ordenando elementos do menor para o maior valor, mas a chave é perdida</p>
            <p><span>asort()</span>Organiza o array e conserva o valor da chave, uhm legal em!!!</p>
            <p><span>rsort()</span>Classica de um array, ordenando elementos do menor para o maior valor inversamente, mas a chave é perdida</p>
            <p><span>arsort()</span>Organiza o array reversamente e conserva o valor da chave.</p>

            <?php tipo_css1();?>

            <?php aula_13();?>

            <?php tipo_css_fecha1();?>
            <hr>

            <h3>Aula 14 - organizando um array naturlmente -  Importante esta aqui</h3>
            <p><span>natsort()</span> Destinada para oferecer um mecanismo de organização naturalmente</p>
            <p><span>ksort()</span> Organiza o array pelas chaves, retornando VERDADEIRO no sucesso e FALSO do CONTRARIO</p>
            <p><span>krsort()</span> Organiza o array pelas chaves mas inversamente, retornando VERDADEIRO no sucesso e FALSO do CONTRARIO</p>
            <?php tipo_css1();?>

            <?php aula_14();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 15 - Unindo Arrays</h3>
            <p><span>merge()</span> Unir arrays retornando um unico e unificado array </p>
            <?php tipo_css1();?>

            <?php aula_15();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 16 - Combinando e dividindo Arrays</h3>
            <p><span>array_combine()</span> Vai produzir um novo array constituido de um conjunto submetido de chaves e valores corespondentes</p>
            <p>Tem que possuir o mesmo tamanho e não pode ter componetes vazios</p>
            <p><span>array_slice()</span> Retorna uma seção de um array baseada em um valor oferecido de offset de inicio e final</p>
            <?php tipo_css1();?>

            <?php aula_16();?>

            <?php tipo_css_fecha1();?>

            <hr>
            <h3>Aula 17 - Inserção de Arrays</h3>
            <p><span>array_Intersect()</span> Retorna um array de chave preservada consistindo somente daqueles valores presentes no primeiro array e que tambem estão presentes em cada um array</p>
            <p></p>
            <?php tipo_css1();?>

            <?php aula_17();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 18 - Valores aleatorios de Array - O FIANAL EBÁÁÁ...</h3>
            <p><span>rand()</span> Retorna um numero aleatorio de chaves encontradas em um array</p>



            <?php tipo_css1();?>

            <?php aula_18();?>

            <?php tipo_css_fecha1();?>
        </div>
        <aside>

            <h3>Definição de um Array</h3>
           <p> Em programação de computadores, um arranjo (em inglês array) é uma estrutura de dados que armazena uma coleção de elementos de tal forma que cada um dos elementos possa ser identificado por, pelo menos, um índice ou uma chave. Essa estrutura de dados também é conhecida como variável indexada, vetor (para arranjos unidimensionais) e matriz (para arranjos bidimensionais). Os arranjos mantêm uma série de elementos de dados, geralmente do mesmo tamanho e tipo de dados. Elementos individuais são acessados por sua posição no arranjo. A posição é dada por um índice, também chamado de subscrição. O índice geralmente utiliza uma sequência de números inteiros, mas o índice pode ter qualquer valor ordinal. Os arranjos podem ser multidimensionais, significando que eles são indexados por um número fixo de números inteiros, por exemplo, por um sequência (ou sucessão) finita de quatro números inteiros. Geralmente, arranjos unidimensionais e bidimensionais são os mais comuns.</p>


        <p>Os arranjos podem ser considerados como as estruturas de dados mais simples. Têm a vantagem de que os seus elementos são acessíveis de forma rápida mas têm uma notável limitação: são de tamanho fixo, mas podem ser incrementados ou diminuídos com determinados algoritmos, geralmente envolvendo a cópia de elementos de um arranjo para outro e reiniciar o original com a nova dimensão. Os vetores podem ser implementados desta forma.</p>

        <p>Estas estruturas de dados são ajeitadas nas situações em que o acesso aos dados seja realizado de forma aleatória e imprevisível. Porém, se os elementos podem estar ordenados e vai-se empregar um acesso sequencial, seria mais recomendada uma lista.</p>
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
                <li><a href="http://www.3mainformatica.com.br/estudos/hardware/">Hardware & Redes</a></li>

            </ul>
        </footer>
    </article>

</section>
</body>
</html>
