<!DOCTYPE html>
<html lang="pt_BR" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <title>Estudos</title>
    <link rel="stylesheet" href="estilo/estilo.css" type="text/css" media="screen" />
   <!-- Este aquivo script.php é onde estão a maioria dos scripts desta página -->
    <?php require_once "script/script.php"; ?>
    <!-- Este arqui aqui é onde estão os arquivos das funções do exercicio 27 -->



</head>
<body>
<section>
    <header>
    </header>
    <nav>
        <ul>
            <li><a href="http://www.3mainformatica.com.br/estudos">Inicio</a></li>
            <li><a href="http://www.3mainformatica.com.br/estudos/curso_mJailton/curso_javaScript_modulo_1/aulas_javaScript.html">JavaScript P_1</a></li>
            <li><a href="http://www.3mainformatica.com.br/estudos/curso_mJailton/curso_javaScript_modulo_1/aulas_java_script_o_o/oo.html">javaScript P_2</a></li>
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

            <h1> Aulas de PHP - ?php? - </h1>

            <p>Estas Aulas estão em meu arquivo script.php. Sua jogada aqui foi a criação de uma função para cara Aula assim quando presiço chamo cada uma. Em alguns casos vai ter a necesidade de utilização de um formalário para enviar os números para serem calculados</p>
            <p>Este estilo ai ( delimetado de azul ) ná verdade foi defino no PHP para não prescisar digitar toda hora basta inserir ele que já vem junto o formato do css tipo como é feito no WordPress.</p>

            <?php tipo_css();?>
            <?php testando();  soma(1,5); ?>
            <?php tipo_css_fecha();?>

        <hr>
            <h2>Aula - 04</h2>
            <p> O inicio aqui simplesmente estamos utilizando o comando echo ou print é o mesmo efeito.</p>
            <?php tipo_css();?>
            <?php aula_4();?>
            <?php tipo_css_fecha();?>
            <hr>
            <h2>Aula - 05</h2>
            <p>Teste de variaveis e falando um poco de função criando dentro de função e variaveis globais</p>

            <?php tipo_css();?>
            <?php aula_5();?>
            <?php tipo_css_fecha();?>

            <hr>



            <h2>Aula - 06 - Variaveis Globais</h2>
            <p>Falando sobre variaveis pre definidas, </p>
            <h5>Variaveis Globais</h5>
            <ol>
                <li>$GLOBALS -  Utilizado para chamar uma variavel em minha função</li>
                <li>$_SERVER - </li>
                <li>$_GET - Recuperar dados pela url</li>
                <li>$_POST - Recuperar dados de meus documentos ocultas</li>
                <li>$_FILES - Utilizado para utilização de arquivos </li>
                <li>$_COOKIE - Utilizado para armazena informações e salva no computador do usuário</li>
                <li>$_SESSION - Fica temporariamente até ser utilizada e depois é fechada</li>
                <li>$_REQUEST - Recupera os dados da variavel independente de qual tipo é</li>
                <li>$_ENV - </li>

            </ol>
            <p>Mas temos muitas outras....</p>
            <hr>
            <h2>Aula - 07 - 8 - 9 Estudando Int</h2>
            <p>Tipos de dados</p>
            <p>booleen, integer, float, string</p>
            <p>var_dump()</p>
            <h5>Esta informação de variáveis e descidida pela propria linguagem</h5>
            <p>Agora usando o comando <span>gettype()</span> para ver mais detalhes vai lá ná função <span>aula_9().</span></p>


            <?php tipo_css();?>
            <?php aula_9();?>
            <?php tipo_css_fecha();?>

            <p>Trabalhando com boolen:</p>
            <p><span>var_dump()</span> Retorna o tipo de dado e o valor da variável este aqui embaixo pode usar o (bool) para transformar uma variável em boleana. <span>aula_9_5()</span></p>


            <?php tipo_css();?>
            <?php aula_09_5();?>
            <?php tipo_css_fecha();?>

            <hr>
            <h2>Aula - 10 - Estudando o int</h2>
            <p>Estudando o tipo de dados interos</p>
            <p>Utilizando o <span>(int)</span> para retornar um inteiro</p>
            <p>Utilizando o <span>roud()</span> para arendodar dados</p>

            <?php tipo_css();?>
            <?php aula_10();?>
            <?php tipo_css_fecha();?>

            <hr>
            <h2>Aula - 11 - Estudando - String</h2>
            <p>Estudando tipos de conversor string.</p>
            <p>Tudo que é colocando em aspas simples é impresso.</p>


            <?php tipo_css();?>
            <?php aula_11();?>
            <?php tipo_css_fecha();?>

            <hr>

            <h2>Aula - 12 - 13 - Estudando - Constantes</h2>
            <p> Constante não aceita numeros nem $ o simbolo do dolar criar uma constante utilizando o <span>define()</span></p>


            <?php tipo_css();?>
            <?php aula_13();?>
            <?php tipo_css_fecha();?>

            <hr>
            <h2>Aula - 14 - 15 - 16 Operadores do PHP opá este assunto aqui é bacana C++, ++C, C--, --C</h2>
            <ul>
                <li>-</li>
                <li>+</li>
                <li>*</li>
                <li>/</li>
                <li>%</li>
            </ul>

            <?php tipo_css();?>
            <?php aula_14();?>
            <?php tipo_css_fecha();?>


            <hr>
            <h2>Aula 17 - Operadores de Comparação Bacana este assunto em.</h2>

            <ul>
                <li>==</li>
                <li>===</li>
                <li>!=</li>
                <li><>  Mesma coisa, igual ao de cima</li>
                <li>!==</li>
                <li><</li>
                <li>></li>
                <li><=</li>
                <li>>=/li>


            </ul>
            <p>Operadores Lógicos</p>
            <ul>
                <li>AND "E" &&</li>
                <li>OR "OU" ||</li>
                <li>NOT "não" !a</li>

            </ul>
            <hr>

            <!--Atenção estamos entrando na parte de formularios -->
            <!--Atenção estamos entrando na parte de formularios -->
            <!--Atenção estamos entrando na parte de formularios -->

            <h2>Aula 18 - 19 - 20 - 21 - 22 Conhecendo_formulários isso aqui usa pra caramba</h2><br>
            <h2> Metodos $_GET[' '] - Metodos $_POST[' ']</h2>
            <p>Falando um Pouco de Formulário o arquivo é o formularios.php, formularios2.php</p>

            <?php tipo_css();?>
            <form id="formulario_simpples_exibe_nomes" method="post" action="script/formulario.php">
                Insere dados: <input type="text" id="dados" name="txt_email" size="30" maxlength="25">

            <button>Click em Min </button>
            </form>
            <?php tipo_css_fecha();?>
            <hr>
            <h3>Mais sobre formulários</h3>

            <?php tipo_css();?>

            <form id="formulario_com_vários_parametros" method="post" action="script/formulario2.php">
                <?php tipo_css();?>
                <p>Qual curso você gostaria de aprender ?</p>
                <table>
                <tr><input type="radio" name="curso" value="enviar"> Lógica de programação </tr> <br>
                    <tr> <input type="radio" name="curso" value="enviar">Java</tr>  <br>
                    <tr><input type="radio" name="curso" value="enviar"> Mysql </tr> <br>
                    <tr><input type="radio" name="curso" value="enviar"> Criando um loja virtual </tr> <br>
                    <tr><input type="radio" name="curso" value="enviar"> Delphi </tr><br>
                    <tr> <input type="radio" name="curso" value="enviar"> Php </tr> <br>
                </table>
                <?php tipo_css_fecha();?>
                        <br>
                <?php tipo_css();?>

                <p> Qual a melhor linguagem de programação ?
                <select name="melhorCurso" size="1">
                    <option value="Delphi">Delphi</option>
                    <option value="PHP fino">Php</option>
                    <option value="Java"> Java</option>
                    <option value="VB.NET"> VB.NET</option>
                    <option value="C#">C# </option>
                    <option value="C++">C++</option>

                </select>
                </p>
                <?php tipo_css_fecha();?>
                <br>
                <?php tipo_css();?>

                <p> Digite o seu comentário no espaço abaixo:</p>
                    <textarea name="comentarios" rows = "6" cols="42"></textarea>

                <p>Deixe seus dados para contato:</p>
                    Nome: <input type="text" size="35" maxlength="200" name="nome"> <br>
                     Telef:<input type="text" size="35" maxlength="200" name="fone"> <br>
                     Email: <input type="text" size="35" maxlength="200" name="email"> <br>
                     Senha: <input type="password" size="35" maxlength="200" name="senha"> <br><br><br>
                <?php tipo_css_fecha();?>
                <br>
                <?php tipo_css();?>
                <input type="checkbox" name="noticias" value="not">
                <p> Gostaria de receber nocias das novidades do site</p>
                <br>
                <?php tipo_css_fecha();?>

                <button>Enviar Dados</button>
            </form>

            <?php tipo_css_fecha();?>
            <br>
            <h3>Mais Mais sobre formulários</h3>
            <?php tipo_css();?>

        <form id="formulario_soma_dois_numeros" method="post" action="index.php">

            <p>Digite seus dados para calcular :)</p>

                Numero 1:<input type="text" size="10"  name="valores1"><br>
                Numero 2:<input type="text" size="10"  name="valores2"><br>
            <button>Enviar os dados agora</button>
            <br>
            <!-- Fazendo o calculo desde formulário ai de cima aqui em baixo -->
            <!-- Fazendo o calculo desde formulário ai de cima aqui em baixo -->
            <!-- Fazendo o calculo desde formulário ai de cima aqui em baixo -->
            <?php

            $a = isset($_POST['valores1'])?$_POST['valores1']:1;
            $b = isset($_POST['valores2'])?$_POST['valores1']:1;
            $soma = $a + $b;

            print "<br><span style='font-size: 30px; color:red;'>$soma</span>";

            ?>


        </form>
            <?php tipo_css_fecha();?>
            <br>
            <hr>
            <h2>Aulas 23 - 24 - 25 - 26 - Estruturas de Comando - </h2>
            <br>
            <p>Este sistema vai funcionar perfeitamente mas devemos criar um banco para armazenar ou numero de votos</p>
            <lu>

                <li>Condição <span>if</span></li>
                <li>Condição <span>else</span></li>
                <li>Condição <span>elseif</span></li>
                <li>Condição <span>switch</span></li>
                <li>Condição <span>for</span></li>


            </lu>
            <br>
            <?php tipo_css();?>

            <p>Sistema de Votação Escolha seu candidado mas atenção, escolha um bom candidado ok gafalhoto</p>

            <form id="formulario_votação" method="post" action="script/votacao.php">

                <fieldset><legend>Urna Eletronica</legend>

            <input type="radio" name="vota" value="1"> Bozo <br>
            <input type="radio" name="vota" value="2"> Xuxa  <br>
            <input type="radio" name="vota" value="3"> Ms. Magó  <br>
            <input type="radio" name="vota" value="4"> Chapolin  <br>


                </fieldset>
                <button>Vamos Votar aqui Rápido</button>
               </form>


            <?php tipo_css_fecha();?>

            <hr>
            <br>
            <h3> Estruturas de repedtição - For - </h3>

            <?php tipo_css();?>

            <?php aula_25();?>

            <?php tipo_css_fecha();?>
            <br>
            <hr>
            <h2>Aula 27 - Estudando Funções - </h2>
            <br>
            <br>
            <p><span>Vai lá no arquivo funções.php tá tudo ali</span></p>

            <?php tipo_css();?>

            <form id="formulario_votação" method="post" action="script/funcoes.php">

                <fieldset><legend>Tirando Média do Aluno</legend>
                Nota1:<input type="number" name="valor1" min="1" max="20" ><br>
                Nota2:<input type="number" name="valor2" min="1" max="20" ><br>
                Nota3:<input type="number" name="valor3" min="1" max="20" ><br>

                    <button>O que está esperando? Calcula Aqui</button>
            </fieldset>
            </form>
            <br>



            <?php tipo_css_fecha();?>


            <hr>
        </div>
        <aside>
            <h2>Cursos do Mjailton - História do PHP</h2>

                <p>A linguagem surgiu em meados de 1994, como um pacote de programas CGI criados por Rasmus Lerdorf, com o nome Personal Home Page Tools, para substituir um conjunto de scripts Perl que ele usava no desenvolvimento de sua página pessoal. Em 1997 foi lançado o novo pacote da linguagem com o nome de PHP/FI, trazendo a ferramenta Forms Interpreter, um interpretador de comandos SQL.</p>
               <p>Mais tarde, Zeev Suraski desenvolveu o analisador do PHP 3 que contava com o primeiro recurso de orientação a objetos, que dava poder de alcançar alguns pacotes, tinha herança e dava aos desenvolvedores somente a possibilidade de implementar propriedades e métodos.3 4 Pouco depois, Zeev e Andi Gutmans, escreveram o PHP 4, abandonando por completo o PHP 3, dando mais poder à máquina da linguagem e maior número de recursos de orientação a objetos. O problema sério que apresentou o PHP 4 foi a criação de cópias de objetos, pois a linguagem ainda não trabalhava com apontadores ou handlers, como são as linguagens Java, Ruby e outras. O problema fora resolvido na versão atual do PHP, a versão 5, que já trabalha com handlers. Caso se copie um objeto, na verdade copiaremos um apontador, pois, caso haja alguma mudança na versão original do objeto, todas as outras também sofrem a alteração, o que não acontecia na PHP 4.5.</p>

                <p>Trata-se de uma linguagem extremamente modularizada, o que a torna ideal para instalação e uso em servidores web. Diversos módulos são criados no repositório de extensões PECL (PHP Extension Community Library) e alguns destes módulos são introduzidos como padrão em novas versões da linguagem. É muito parecida, em tipos de dados, sintaxe e mesmo funções, com a linguagem C e com a C++.</p>
                 <p>Pode ser, dependendo da configuração do servidor, embarcada no código HTML. Existem versões do PHP disponíveis para os seguintes sistemas operacionais: Windows, Linux, FreeBSD, Mac OS, OS/2, AS/400, Novell Netware, RISC OS, AIX, IRIX e Solaris.</p>

                <p> Construir uma página dinâmica baseada em bases de dados é simples com PHP, (em parte, vale lembrar), este provê suporte a um grande número de bases de dados: Oracle, Sybase, PostgreSQL, InterBase, MySQL, SQLite, MSSQL, Firebird, etc., podendo abstrair o banco com a biblioteca ADOdb, entre outras. A Wikipédia funciona sobre um software inteiramente escrito em PHP, usando bases de dados MySQL: o MediaWiki.5

            PHP tem suporte aos protocolos: IMAP, SNMP, NNTP, POP3, HTTP, LDAP, XML-RPC, SOAP. É possível abrir sockets e interagir com outros protocolos. </p>

                    <p>E as bibliotecas de terceiros expandem ainda mais estas funcionalidades. Existem iniciativas para utilizar o PHP como linguagem de programação de sistemas fixos. A mais notável é a PHP-GTK. Trata-se de um conjunto do PHP com a biblioteca GTK, portada do C++, fazendo assim softwares inter-operacionais entre Windows e Linux. Na prática, essa extensão tem sido muito pouco utilizada para projetos reais.5</p>
            <hr>
            <p><span>Superglobais são variáveis nativas que estão sempre disponíveis em todos escopos</span></p>
            <ul>

                <li><span>$GLOBALS</span> - Referencia todas variáveis disponíveis no escopo global</li>
                <li><span>$_SERVER</span> - Informação do servidor e ambiente de execução</li>
                <li><span>$_GET</span> - HTTP GET variáveis</li>
                <li><span>$_POST</span> - HTTP POST variables</li>
                <li><span>$_FILES</span> - HTTP File Upload variáveis</li>
                <li><span>$_REQUEST</span> - Variáveis de requisição HTTP</li>
                <li><span>$_SESSION</span> - Variáveis de sessão</li>
                <li><span>$_ENV</span> - Environment variables</li>
                <li><span>$_COOKIE</span> - HTTP Cookies</li>
                <li><span>$php_errormsg</span> - A mensagem de erro anterior</li>
                <li><span>$HTTP_RAW_POST_DATA</span> - Informação não-tratada do POST</li>
                <li><span>$http_response_header</span> - Cabeçalhos de resposta HTTP</li>
                <li><span>$argc</span> - O número de argumentos passados para o script</li>
                <li><span>$argv</span> - Array de argumentos passados para o script</li>

                </ul>
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
