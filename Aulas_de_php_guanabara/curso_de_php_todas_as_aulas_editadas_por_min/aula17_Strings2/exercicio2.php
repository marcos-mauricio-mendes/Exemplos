<meta charset="utf-8">
<?php



//14-Função strtolower
echo "<h1>14 - Função strtolower</h1>";
echo "<h3> Passa os caracteres para minusculo .</h3>";


$nome = "Marcos Mauricio Mendes Alves";
$nome2 = strtolower($nome);

echo "Meu nome era assim ($nome) é ficou assim ($nome2)";

//15-Função strtoupper


echo "<h1>15 - Função strtolower</h1>";
echo "<h3> Passa os caracteres para maiusculo .</h3>";


$nome = "Marcos Mauricio Mendes Alves"; 
$nome2 = strtoupper($nome);

echo "Meu nome era assim ($nome) é ficou assim ($nome2)";


//16-Função ucfirst


echo "<h1>16 - Função ucfirst</h1>";
echo "<h3> Passa a primeira letra para maiusculo</h3>";


$nome = "marcos mauricio mendes alevs";
$nome2 = ucfirst($nome);


echo "Meu nome era assim: $nome .Agora meu nome com esta função é: $nome2";


//17-Função ucfirst


echo "<h1>17 - Função ucwords</h1>";
echo "<h3>Passa as primeiras letras para maiusculo </h3>";


$nome = "marcos mauricio mendes alevs";
$nome2 = ucwords($nome);


echo "Meu nome era assim: $nome .Agora meu nome com esta função é: $nome2";


//18-Função strrev


echo "<h1>18- Função strrev</h1>";
echo "<h3>Passa um string para o contrario </h3>";


$nome = "marcos mauricio mendes alevs";
$nome2 = strrev($nome);


echo "Meu nome era assim: $nome .Agora meu nome com esta função é: $nome2";



//19-Função strpos


echo "<h1>19- Função strpos</h1>";
echo "<h3>Mostra a posição de uma string </h3>";


$frase = "Curso em video de PHP do professor Gustavo Guanabara";
$pos = strpos($frase, "PHP");


echo "$frase<br>A string PHP foi encontrada na posição $pos";




//20-Função stripos


echo "<h1>20- Função stripos</h1>";
echo "<h3>Mostra a posição de uma string independente do seu tamanho </h3>";


$frase = "Curso em video de PHP do professor Gustavo Guanabara";
$pos = stripos($frase, "PHP");


echo "$frase<br>A string PHP foi encontrada na posição $pos";





//21-Função substr_count


echo "<h1>21- Função substr_count</h1>";
echo "<h3>Conta quantas palavras expecificas tem em minha frase</h3>";


$frase = "Estou aprendendo o grande PHP no Curso em Video de PHP";
$cont = substr_count($frase, "PHP");


echo "$frase<br> foi encontrada a palavra PHP $cont vezes";


//22-Função substr


echo "<h1>22- Função substr</h1>";
echo "<h3>Faz o fatiamento de um string dá possição 0 e depois o tamanho escolhido</h3>";


$site = "Curso em Video";
$sub = substr($site,0,5);


echo "$site<br> Ná posição 0 tem uma letra $sub com 5 caracteres";



//23-Função substr


echo "<h1>23- Função str_pad</h1>";
echo "<h3>Faz o tamanho de minha string caber em um espaço selecionado</h3>";


$nome = "Mauricio";
$novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);


echo "$nome<br> Agora com 30 espaços $novo fica assim.";


//24-Função str_repeat


echo "<h1>24- Função str_repeat</h1>";
echo "<h3>Faz a repetição de minha string selecionada</h3>";


$txt = str_repeat("Php",5);

echo "A palavra PHP Vou repetir ela 5 vez $txt";

print(str_repeat("-",30));


//25-Função str_replace


echo "<h1>25- Função str_replace</h1>";
echo "<h3>Troca um caractere pre definido de minha string</h3>";


$frase = "Gosto de estudar Matematica bem eu acho";

$novafrase = str_replace( "Matematica", "PHP", $frase);

echo "Minha antiga frase ($frase) agora com o comando ($novafrase)";





?>