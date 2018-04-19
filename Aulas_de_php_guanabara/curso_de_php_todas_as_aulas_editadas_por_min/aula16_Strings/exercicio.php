<meta charset="utf-8">
<?php



//1-Função printf
echo "<h1>1 - Função printf</h1>";
echo "<h3> Comandos do printf, %s mostra uma string, %f mostra um numero real, %d mostra um valor decimal, %u mostra um valor decimal sem sinal mas tem muitas outras.</h3>";

$p = "Leite";
$pr = 4.5;



echo "O $p custa RS ". number_format($pr,2);

echo "<br>";

printf (" O %s custa R$ %.2f Aqui com o comando print", $p, $pr);




echo "<br><br>";

//2-Função print_r

echo "<h1>2 - Função print_r</h1>";
echo "<h3> Mostra as informações do vetor </h3>";

$x[0]= 1;
$x[1]= 2;
$x[2]= 3;
$x[3]= 4;
$x[4]= 5;

print_r($x);

echo "<br><br>";    
$y = array(1,2,3,4,5,6,7,8,9,10);

print_r($y);

//3-Função wordwrap

echo "<h1>3- Função Wordwrap</h1>";
echo "<h3> Cria quebra de linhas em meu codigo é possivel utilizar contagem de caracteres nas palavras wordwrap(variavel, numero de caracteres, quebra de linha, true ou false) </h3>";


$txt = " Este é um texto gigante criando como exemplo para mostrar como funciona da função wordwrap muito legal esta função do php.";

echo "<h4>Meu Texto Original vou quebrar com  20 caracteres</h4> $txt ";

$res = wordwrap($txt, 20, "<br />");

echo "<<br /><h4>Com a função Wordwrap</h4><br /> $res ";


//4- Função srtlen

echo "<h1>4-Função strlen() </h1>";
echo "<h3> Mostra a quantidade de caracteres de minha string </h3>";


$tx1 = "Marcos Mauricio Mendens Alves";
$tamanho = strlen($tx1);


echo " $tx1 $tamanho ";





//5-função trim

echo "<h1>5-Função trim </h1>";
echo "<h3>Elimina os espaços de uma váriavel</h3>";


$nome = "   José da Silva   ";
echo(strlen($nome));
$novo = trim($nome);
$novo = strlen($novo);

echo "<br>Agora com o comando trim para tratar os dados temos apenas $novo";


//6-função ltrim

echo "<h1>6-Função ltrim </h1>";
echo "<h3>Elimina os espaços de uma váriavel mas apenas do inicio</h3>";


$nome = "   José da Silva   ";
echo(strlen($nome));
$novo = ltrim($nome);
$novo = strlen($novo);

echo "<br>Agora com o comando ltrim para tratar os dados temos apenas $novo";


//7-função rtrim

echo "<h1>7-Função rtrim </h1>";
echo "<h3>Elimina os espaços de uma váriavel mas apenas do final</h3><p>Aqui não tem muita diferença pois coloque a mesma quantidade de espaços tanto atraz como ná frente</p><br />";


$nome = "   José da Silva   ";
echo(strlen($nome));
$novo = rtrim($nome);
$novo = strlen($novo);

echo "<br>Agora com o comando rtrim para tratar os dados temos apenas $novo";


//8-função str_word_count

echo "<h1>8-Função str_word_count </h1>";
echo "<h3>Conta quantas palavras tem em minha váriavel mas faz mais coisas com 1 gera vetor e 2 vertor mantendo o posisionamento de uma string</h3>";


$frase = "Eu vou estudar PHP agora";
$cont = str_word_count($frase, 0);


printf( "Minha variável ( %s ) tem %s palavras ", $frase, $cont); 



//9-Função Explode


echo "<h1>9-Função explode</h1>";
echo "<h3>Conta quantos espaços tem e minha strig e gera um vetor</h3>";


$site = "Curso em video";
$vetor = explode(" ",$site);

printf("Minha variável ( %s ) tem o vetor %f", $site , $vetor);


//10-Função str_split

echo "<h1>10-Função str_split</h1>";
echo "<h3>Pega cada palavra de uma strig e coloca em cada indice do meu vetor</h3>";



$a1 = "Maria";
$ab = str_split($a1);




echo " Minha variavel $a1 ";
echo " Tem cada palavra do indice do meu vetor "; print_r($ab);


//11-Função implode


echo "<h1>11-Função implode ou joein</h1>";
echo "<h3>Vai preencer os espaços de meu vetor</h3>";


$vetor1 = array('curso','em','video');

print_r($vetor1);

$text = implode("#",$vetor1);

echo "<br>";

print($text);


//12-Função CHR


echo "<h1>12-Função CHR</h1>";
echo "<h3>Vai aparecer que si refere ná tabela ASSC</h3>";



$letra = chr(67);


printf( "O numero  de codigo 67 tem o valor %s da tabela ASSC ",$letra); 


//13-Função CHR

echo "<h1>13-Função ORD</h1>";
echo "<h3>Vai aparecer que si refere ná tabela ASSC</h3>";



$let = "C";
$cod = ord($let);


printf( "A letra C  tem o codigo %s ",$cod); 



?>