<!DOCTYPE html>
<html lang="pt_BR">
<head>

    <meta charset="utf-8">
    <title>Estudos</title>
    <link rel="stylesheet" href="estilo/estilo.css" type="text/css" media="screen" />
    <!-- Este aquivo script.php é onde estão a maioria dos scripts desta página -->
    <?php require_once "script_string/script_string.php"; ?>


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
            <h1> String em PHP várias coisas legais</h1>
            <h3>Aula - 03 - String CHR </h3>
            <p>Falndo sobre a string <span>chr</span> retorna uma string de um único caractere contendo o caractere especifico pelo ASCII</p>

            <?php tipo_css1();?>

            <form id="formulario_string" method="post" action="script_string/fomulario_string.php">

                <p>Digite seus dados para calcular :)</p>

                Digite sua pavavra ou texto para retornar em ASCII: <input type="text" size="10"  name="dados"><br>

                <button>Enviar os dados agora</button>
                <br>

            </form>

            <?php tipo_css_fecha1();?>

        <hr>
            <h3>Aula - 04 - String ORD </h3>
            <p><span>ord()</span> Retorna o valor Ascii do primeiro caractere da string</p>

            <?php tipo_css1();?>
            <form id="formulario_string" method="post" action="script_string/fomulario_string_ord.php">

                <p>Digite seus dados para calcular :)</p>

                Digite o numero ASCII: <input type="text" size="10"  name="dados"><br>

                <button>Enviar os dados agora</button>
                <br>

            </form>
            <?php tipo_css_fecha1();?>

            <HR>

            <h3>Aula - 04 e meio é isto mesmo  - Comando trim</h3>
            <p><span>ltrim()</span> Tira os espaços em branco a esquerda da string</p>
            <p><span>rtrim()</span> Tira os espaços em branco da direita da string</p>
            <p><span>trim()</span> Tira os espaços em branco da esquerda e da direira</p>

            <?php tipo_css1();?>

            <?php aula_4_5();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 5 - Comando Strlen</h3>
            <p><span>strlen</span> Conta quantos caracteres tem em minha string</p>

            <?php tipo_css1();?>

            <?php aula_5();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 6 - Comando Strcmp</h3>
            <p><span>strcmp()</span> Executa uma comparação binaria entre duas string e faz a diferenciação do maiusculo e minusculo</p>

            <?php tipo_css1();?>

            <form id="formulario_string" method="post" action="script_string/formulario_string_strcmp.php">

            <p>Digite seus dados para serem comarados</p>

                Valor 1: <input type="text" size="10" name="d1"><br>
                Valor 2: <input type="text" size="10" name="d2"><br>

            <button>Enviar os dados agora</button>
            <br>

            </form>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 7 - Comando strcasecmp()</h3>
            <p><span>stcasecmp()</span> Faz a mesma coisa que strcmp() só que ela não faz diferenciação de maiusculo e minusculo</p>
            <?php tipo_css1();?>

            <?php tipo_css_fecha1();?>
            <h3>Aula - 8 - Comando strspn() - </h3>
            <p><span>strspn()</span> Retornar o comprimento do primeiro seguimento em uma string contendo caracteres também encontrados em outra string</p>

            <?php tipo_css1();?>

            <form id="formulario_string" method="post" action="script_string/formulario_string_strspn.php">

                <p>Digite seus dados para serem comarados:</p>

                Valor 1: <input type="text" size="10" name="b1"><br>
                Valor 2: <input type="text" size="10" name="b2"><br>

                <button>Enviar os dados agora</button>
                <br>

            </form>

            <?php tipo_css_fecha1();?>


            <hr>
            <h3>Aula 9 - Convertendo Caracteres Maiusculo e Minusculo</h3>
            <p><span>strtolower</span> Converte todas as letras em minusculo</p>
            <p><span>strtoup</span> Converte todas as letras em maiuscula</p>
            <p><span>strtoup</span> Converte todas as letras em maiuscula</p>
            <p><span>ucfist</span> Coloca a primeira letra da string str em maiuscula</p>
            <p><span>ucwords</span> Coloca em maiusculo toda a primeira letra de cada palavra</p>
            <p><span></span></p>

            <?php tipo_css1();?>

            <?php aula_09();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 10 - nlobr - Esta é bem utilizada para interagir com o html </h3>
            <p><span>nl2br()</span> Converter todos os caracteres nova linha \n em uma string compativel XHTML equivalente </p>

            <?php tipo_css1();?>

            <?php aula_10();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 11 - htmlenties()- Dentre outros comandos para manipulação do HTML </h3>
            <p><span>htmlenties()</span> Converte todos o calacteres aplicaveis em entidades HTML</p>
            <p><span>ENT_COMPAT</span> Converte aspas duplas e ignora as aspas simples, valor padrão</p>
            <p><span>ENT_NOQUOTES</span> Ignora aspas simples e aspas duplas</p>
            <p><span>ENT_QUOTES</span> Converte aspas simples e aspas duplas</p>

            <?php tipo_css1();?>

            <?php aula_11();?>

            <?php tipo_css_fecha1();?>

            <hr>
            <h3>Aula 12 - htmlspecialchars - </h3>
            <p><span>htmlsceailchar()</span> Funcionamento parecido com htmlenties() converte os caracteres expeciais para a realidade do HTML</p>
            <p><span></span></p>


            <?php tipo_css1();?>

            <?php aula_12();?>

            <?php tipo_css_fecha1();?>


            <hr>
            <h3>Aula 13 - - Função - strtr()</h3>
            <p><span>strtr()</span>Converte todos os caractes de uma string a sua combinação correspondente encontrada em um array predefinido</p>

            <?php tipo_css1();?>

            <?php aula_13();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 14 -  Comandos strip_tags()</h3>
            <p><span>strip_tags()</span> Remove todas as tags html e php de uma string, deixando as entidades do texto</p>

            <?php tipo_css1();?>

            <?php aula_14();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 15 - Comandos Strtok</h3>
            <p><span>strtok()</span> Formata a string baseada em uma lista pre definida de caracteres</p>

            <?php tipo_css1();?>

            <?php aula_15();?>

            <?php tipo_css_fecha1();?>

            <hr>
            <h3>Aula 16 - String explode() </h3>
            <p><span>explode</span> Divide a string em um array de substring</p>
            <?php tipo_css1();?>

            <?php aula_16();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 17 - String implode() </h3>
            <p><span>implode()</span> Comcatena os elementos de um array para formar uma string</p>

            <?php tipo_css1();?>

            <?php aula_17();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 18 -String str_replace()</h3>
            <p><span>str_replace()</span>Ela substitui com diferença de capitalização entre letras, todas as instancias de uma string por outra</p>
            <?php tipo_css1();?>

            <?php aula_18();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 19 - Comando strstr()</h3>
            <p><span>strstr()</span> Retorna o resto de uma string começando com a primeira ocorencia de uma streng pré definida</p>

            <?php tipo_css1();?>

            <?php aula_19();?>

            <?php tipo_css_fecha1();?>

        <hr>
            <h3>Aula 20 - Comando substr()</h3>
            <p><span>substr</span> Retorna parte de uma string localizada entre um offset de inicialização predefinido e posição de comprimento</p>
            <?php tipo_css1();?>

            <?php aula_20();?>

            <?php tipo_css_fecha1();?>
        <hr>

            <h3>Aula 21 - Comando substr_count()</h3>
            <p><span>substr_count()</span> Retorna um número de vezes que uma string ocorre dentro de outra</p>
            <?php tipo_css1();?>

            <?php aula_21();?>

            <?php tipo_css_fecha1();?>

            <hr>
            <h3>Aula 22 -  Comando substr_replace()</h3>
            <p><span>substr_replace()</span> Substitui uma porção de uma string com uma string de substituição começando a substituição em uma posição especifica de parte e final em comprimento de substituição predefinida</p>

            <?php tipo_css1();?>

            <?php aula_22();?>

            <?php tipo_css_fecha1();?>
            <hr>
            <h3>Aula 23 - Comando str_pad</h3>
            <p><span>str_pad()</span> Preenche uma string com um numero expecificado de caracteres</p>
            <p><span>STR_PAD_RIGHT</span> Para direita</p>
            <p><span>STR_PAD_LEFT</span> na esquerda</p>
            <p><span>STR_PAD_BOTH</span> ambos</p>

            <?php tipo_css1();?>

            <?php aula_23();?>

            <?php tipo_css_fecha1();?>

        <hr>
            <h3>Aula 24 - Comando cont_chars()</h3>
            <p><span>cont_chars()</span> Contar a quantidade de caracteres encontrados em uma string</p>

            <?php tipo_css1();?>

            <?php aula_24();?>

            <?php tipo_css_fecha1();?>
        <hr>
        <h3>Aula 25 - Comando str_word_count()</h3>
        <p><span>srt_word_count()</span> Oferece informações sobre o numero total de palavras encontras em uma string</p>
            <?php tipo_css1();?>

            <?php aula_25();?>

            <?php tipo_css_fecha1();?>

        </div>
        <aside>
            <h2>Strings em PHP</h2>

            <p> O tratamento de strings em php é dos melhores. Existem várias funções que lhe permitem fazer quase o que quiser com uma string.</p>

            <p>Neste tutorial vou mostrar as principais funções para tratamento de strings. Antes de tudo, porém, é bom saber o que é uma string, certo? Pois bem: uma string é um conjunto de caracteres, letras, números, símbolos … qualquer coisa. No desenvolvimento de qualquer coisa você usará strings, não importa a linguagem que esteja a usar. Só que, dependendo da linguagem você terá certas restrições.</p>

            <p> No php você tem uma comodidade que até o momento eu não vi em nenhuma outra linguagem. Veja abaixo algumas funções para manipulamento de strings que o php nos oferece:</p>

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
