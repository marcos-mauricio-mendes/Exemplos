<!DOCTYPE html>
<html lang="pt_BR">
<head>

    <meta charset="utf-8">
    <title>Estudos Funções My-Sql</title>
    <link rel="stylesheet" href="estilo/estilo.css" type="text/css" media="screen" />
    <!-- Estes aquivos conecta.php é onde conecta em meu banco -->
    <?php require_once "script_php_mysql/conecta.php"; ?>
    <?php conectabanco();?>


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
            <h1>Trabalhando com Mysql - PHP</h1>

            <hr>

            <ul type="circle">
                <li><a href="http://localhost/cursophp5.5/Curso_Mjailton/curso_php_inicial/script_php_mysql/criando_tabela.php">Criando uma nova tabela no meu banco funcoes_mysql com a função CREATE </a> </li>
                <li>Inserindo valores INSERT INTO nome_tabela (campos) VALUES (valores)</li>
                <li><span>$sql = "INSERT INTO cliente (id_cliente,cliente, email, data, ativo) VALUE (NULL,'Jose Eustaquio','jose@gmail.com','$data','S')";</span></li>
                <li><span>$qry = mysql_query($sql);</span></li>
                <li><span>mysql_error()</span> Retorna o erro ocorrido pela a conecção ativa.</li>
            </ul>

            <ul>
                <li><span>$sql = "UPDATE cliente SET data ='$data' WHERE id_cliente = 2 ";</span> Alerando um valor no registro</li>
                <li><span>$sql = "DELETE FROM cliente WHERE id_cliente = 4";</span> Exluido Valores</li>
                <li><span>$qry = mysql_query($sql) </span> Criando as pesquisas e armazenando em uma variavel</li>
                <li><span>$resultado = mysql_fetch_array($qry); </span> Criando um array para armazenar as pesquisas </li>
                <li><span>while($resultado = mysql_fetch_array($qry)){}</span> Percorendo meu array para imprimir todos os campos da tabela </li>
            </ul>
                <br>
                <pre>

                    $sql = "SELECT * FROM cliente ";

                    $qry = mysql_query($sql);

                    $resultado = mysql_fetch_array($qry);


                    while($resultado = mysql_fetch_array($qry)){

                if($qry){

                    echo "Criado com sucesso"."espaço"."espaço";
                    echo $qry . "espaço" . "espaço";
                    echo "Codigo: "          . $resultado["id_cliente"] . "espaço";
                    echo "Cliente: "         .$resultado["cliente"] . "espaço";
                    echo "Email: "           .$resultado["email"] . "espaço";
                    echo "Data_Cadastro: "   .$resultado["data"] . "espaço";
                    echo "Ativo: "           . $resultado["ativo"] . "espaço";

                }else{


                echo "Não foi possivel inserir os dados " . mysql_error();
                }

0                </pre>

            <ul>
                <li><span>$sql = "SELECT * FROM nome_tabela ";</span>Fazendo uma pesquisa em minha tabela</li>
                <li><span>$sql = "SELECT * FROM cliente WHERE ativo = 'N';</span>Fazendo uma pesquisa em minha talela e somente no campo ativo com os dados N </li>
                <li><span>$sql = "SELECT * FROM cliente WHERE data_cadastro '2015-01-01 and '2015-01-10'"</span>Fazendo uma pesquisa na tabela cliente e data_cadastro e retornando os valores entre os selecionados</li>

            </ul>

        </div>
        <aside>

            <h3>História do MySql</h3>
            <p>O MySQL foi criado na Suécia por suecos e um finlandês: David Axmark, Allan Larsson e Michael "Monty" Widenius, que têm trabalhado juntos desde a década de 1980. Hoje seu desenvolvimento e manutenção empregam aproximadamente 400 profissionais no mundo inteiro, e mais de mil contribuem testando o software, integrando-o a outros produtos, e escrevendo a respeito dele.</p>

            <p>No dia 16 de Janeiro de 2008, a MySQL AB, desenvolvedora do MySQL foi adquirida pela Sun Microsystems, por US$ 1 bilhão, um preço jamais visto no setor de licenças livres. No dia 20 de Abril de 2009, foi anunciado que a Oracle compraria a Sun Microsystems e todos o seus produtos, incluindo o MySQL. Após investigações da Comissão Europeia sobre a aquisição para evitar formação de monopólios no mercado a compra foi autorizada e hoje a Sun faz parte da Oracle.4 5</p>

            <p>O sucesso do MySQL deve-se em grande medida à fácil integração com o PHP incluído, quase que obrigatoriamente, nos pacotes de hospedagem de sites da Internet oferecidos atualmente. Empresas como Yahoo! Finance, MP3.com, Motorola, NASA, Silicon Graphics e Texas Instruments usam o MySQL em aplicações de missão crítica.6 A Wikipédia é um exemplo de utilização do MySQL em sites de grande audiência.</p>

            <p>O MySQL hoje suporta Unicode, Full Text Indexes, replicação, Hot Backup, GIS, OLAP e muitos outros recursos de banco de dados. My SQL...</p>


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
