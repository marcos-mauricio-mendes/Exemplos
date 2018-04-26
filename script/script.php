<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 03/01/2015
 * Time: 10:05
 */

/* Inserindo minha classe e div alternativa sem presicar digitar ela toda hora */

function tipo_css(){

    echo "<div class=\"tipo\">";

}

/* Fechando minha classe alternativa */
function tipo_css_fecha(){

    echo "</div>";
}


/* Apenas testes para chamada de arquivos ao index.php */

function testando() {

    echo "olá mundo";

}


function soma($x,$y){

   $z  = $x + $y ;

    echo "<br> $z ";

}

/** Aula 4 - Criando Variaveis e concatenando as 2 variaveis**/

function aula_4(){

    $txt="Valor armazenado em minha variavel ";
    $variavel=" \$txt.";
    if($txt != "a" ) {
        print $txt . $variavel;
    }else{

        print "Sem valores em minha variavel";
    }



}

/** Aula 5 -  Lidando com váriaveis globais **/

$b=10;
function aula_5(){



    function verifica(){
        $a = 10;

        print $a+$GLOBALS['b'];

    }

    print verifica();
}


/** Aula 7 - 8 - 9 agora usando os comando gettype()**/


function aula_9(){

    $var_boleana = true; // Criando uma variável do tipo boolean
    $var_str = "marcos"; //String
    $var_int = 123; //inteiro
    $var_strs = 'clouse'; //outra instrig

    echo "MInha variavel é do tipo ". gettype($var_boleana) . " e seu conteudo é " . $var_boleana . "<br>";
    echo "MInha variavel é do tipo ". gettype($var_str) . " e seu conteudo é " . $var_str . "<br>";
    echo "MInha variavel é do tipo ". gettype($var_int) . " e seu conteudo é " . $var_int ."<br>";
    echo "MInha variavel é do tipo ". gettype($var_strs) . " e seu conteudo é " . $var_strs ."<br>";




}

/** Aula 9,5 ufá tamo chegando trabalhando com var_dump() e a o (bool) **/


function aula_09_5(){

        $var_boleana = "ola"; // Criando uma variável do tipo boolean


        var_dump($var_boleana);



}

/** Aula 10 tamo lá numeros inteiros convertendo **/

function aula_10(){

    $a = 1239999999999999999999999999999;
    $b = round($a/5);

    print "Este é o valor real =". $b . "<br>";
    var_dump($a);

    $a = (int) (10/500);
    print "<br>Retornando só um numero inteiro de uma divizão de 10 por 500 = " . $a . "<br>";

}


/** Aula 11 utilizando caracteres expeciais com o \n e aspas simples'' */

function aula_11(){

    echo "Utilizando comandos de aspas simples e aspas duplas" . "<br>" . "\"quebrando linhas com o comando\" " . '\n ' . '$a';
}

/** Aula 13 Trabalhando com constantes **/

function aula_13(){


    define("NOME_CONSTANTE", "Esta é uma criação de uma constante". "<br>", true);

    print NOME_CONSTANTE;

    print "Estou ná linha: " . __LINE__ . "<br>" . PHP_EOL . "<br>";
    print "Estou no diretorio: " . __DIR__. "<br>";
    print "Estou no arquivo: " . __FILE__  . "<br>";


}
/*** Criando um sistema de soma, divizão, multiplicação, subtração utilizando variáveis de atribuição **/

function aula_14()
{


    $d = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
    $b = array("1", "1", "1", "1", "1", "1", "1", "1", "1", "1");
    $g = array("2", "2", "2", "2", "2", "2", "2", "2", "2", "2");
    $h = array("3", "3", "3", "3", "3", "3", "3", "3", "3", "3");


    for ($i = 0; $i < 10; $i++) {


        $c = $d[$i] * $b[$i];
        print "O valor dá multiplicação de " . $b[$i] . " * " . $d[$i] . " é " . "  " . $c . " " . "<br>";

    }
    echo "<hr>";

    for ($i = 0; $i < 10; $i++) {

        $f = $d[$i] * $g[$i];
        print "O valor dá multiplicação de " . $g[$i] . " * " . $d[$i] . " é " . "  " . $f . " " . "<br>";

    }
}

/** Aula 24 um sistema bem simples de votação**/

function aula_24() {

    $candidato1 = $_POST['can1'];

    $candidato2 = $_POST['can2'];

    $candidato3 = $_POST['can3'];

    $candidato4 = $_POST['can4'];






    if($candidato1 > $candidato2 && $candidato1 > $candidato3 && $candidato1 > $candidato4) {

        print "O Candidato 1 ganhou as eleições com : " . $candidato1 . " " . " votos " .  "<br>";

    }elseif($candidato2 > $candidato1 && $candidato2 > $candidato3 && $candidato2 > $candidato4) {

        print "O Candidato 2 ganhou as eleições com : " . $candidato2 . " " . " votos " .  "<br>";


    }elseif($candidato3 > $candidato1 && $candidato3 > $candidato2 && $candidato3 > $candidato4) {

        print "O Candidato 3 ganhou as eleições com : " . $candidato3 . " " . " votos " . "<br>";

    }elseif($candidato4 > $candidato1 && $candidato4 > $candidato2 && $candidato4 > $candidato3) {

        print "O Candidato 4 ganhou as eleições com : " . $candidato4 . " " . " votos " . "<br>";

    }


}

/*** Aula - 26 Estruturas de repetição ***/



function aula_25(){


    for($i=0; $i<5 ;$i++){


        print "Vamos imprimir: " . "" . $i . "<br>"; ;



    }



}


/** Aula - 27 Estruturas de repetição tá lá nó arquivo funcoes.php **/