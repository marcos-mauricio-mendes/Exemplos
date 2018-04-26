<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 06/01/2015
 * Time: 23:27
 */


/* Inserindo minha classe e div alternativa sem prescizar digitar ela toda hora */

function tipo_css1(){

    echo "<div class=\"tipo\">";

}



function tipo_css_fecha1(){

    echo "</div>";
}
/* Fechando minha classe alternativa */



/** Aula 4 e meio usando o comando ltrim() e rtrim tirar os espaços em branco da direita e trim tira de tudo**/


function aula_4_5(){


    $txt = "       Olá cara";
    $txt2 = "Olá como vai você?";

        // usando o comando ltrim
    if (trim($txt) == $txt2){

        echo "Os valores são iguais";
    }else{


        echo "Os valores são diferentes";

    }


}

/** Aula 5 usando o comando strlen muito ultil  usando o trim() para excluir os espaços e depois conta somente os caracteres**/


function aula_5(){

    $txt = '"O valor aqui é muito grande extenço basta você analizar e depois contar direitinho"';


    echo "Minha string: " . $txt . " Tem: " . strlen(trim($txt)) . "<br>";



}


/** Aula 6 usando o comando strcmp tem um formulário expecifico para isso **/

function aula_06(){



}

/** Aula 7  usando o comando strcasecmp tem um formulário especifico para isso **/


function aula_07(){




}

/**aula 8 usando o comando strtolower() transformando string em minusculo ***/


function aula_09() {

    $txt1 = "olá cheguei agora em";

    $txt2 ="UM LEGAL EM SUA SINTAXE";


    print "Utilizando todos os comandos : " . "<br>" . "<br>" . strtolower($txt1) . "<br>" ."<br>" . strtoupper($txt2) . "<br>" . "<br>" . ucfirst($txt1) . "<br>" . "<br>" . ucwords($txt1) . "<br>" . "<br>" ;



}


/** aula 10 usando o comando nl2br "\n" quebra as linhas em meu html  */

function aula_10(){


    $txt1 = "Utilizando o comando nl2br com as\n aqui depois mais\n aqui tambem e depois aqui\n também";


    print nl2br($txt1);



}
/** aula 11 convertendo os caracteres expeciais do html **/

function aula_11(){

$txt1 = " Minha lista de codicos $  © ";

    print htmlentities($txt1);



}


/** aula  12 - Usando o comando htmlspecialchars() */
function aula_12(){

$txt ='<a href="http://www.google.com">Click Aqui</a>';

    print htmlspecialchars($txt);





}

/** Aula 13 - Usando strtr */

function aula_13(){






}

/** Aula 14 - Usando strip_tags  comando strip_tags() **/


function aula_14(){

    $txt ='<a href="http://www.google.com">Este site é legal</a>' . "<br>" . "Usando strip_tags()" ."<br>";



    echo strip_tags($txt,"<br>");

}

/** Aula 15 - Usando o comando strtok() - Formata a string baseada em uma lista pre definida de caracteres **/

function aula_15(){


$txt = "Concursos Publicos | marcos@3mainformatica.com.br | Brasil";


    $tokens = "|";

    $formata = strtok($txt, $tokens);


    while ($formata){


        echo "Dados: " . $formata . "<br>";
        $formata = strtok($tokens);

    }
}

/** Aula 16 -  de Explode divide um array de sub strings */


function aula_16(){



$txt = "Concursos publicos| Os melhores do Momento| Você só acha aqui";

    $resultado = explode("|",$txt);

    echo "Meu texto original: " . $txt . "<br>" . "<br>" ;

     // pode usar o comando list() para criar uma variável para cada string

    print_r($resultado);
}

/** Aula 17 - Função implode()**/

function aula_17(){

$txt = array("domingo","segunda","terça", "quarta", "quinta " , "sexta");


    $dias_semana = implode("|", $txt);

    print_r($txt);

    echo "<br>" . "<br>". "Usando o comando implode() para unir meu array "."<br>";
    echo $dias_semana;


}


/** Aula 18 - str_repalce() **/


function aula_18(){

    $txt = "Quero trocar as letras deste texto";

    print "Meu texto origial é " . "<br>" . $txt . "<br>" . "<br>";

    $modificado = str_replace("o","-", $txt);



    print "Meu texto modificado é:" . "<br>" . $modificado;


}


/** Aula 19 - strstr */


function aula_19() {


    $txt = "marcos@3mainformatica.com.br";


    $modifica = strstr($txt,"@");


    echo $modifica;

}

/** Aula 20 - substr() */


function aula_20(){

    $txt = "marcos@3mainformatica.com.br";

    $modifica = substr($txt,"2");


    echo $modifica;



}


/** Aula 21 - */

function aula_21(){



    $txt = "Mais uma super string com uma porrada de conteudos";

    // Localizando um caractere no caso a

    $modificado = substr_count($txt, "a");

    echo "$modificado" . "<br>";

}

/** Aula 22  - substr_replace()** */


function aula_22(){


    $txt1 = "Mais uma super string com uma porrada de conteudos";

    $txt = "31-9499-7029";
    $modifica = substr_replace($txt,"**********",0,10);

    echo $modifica;
}

/** Aula 23 -str_pad() */


function aula_23(){


$txt1 = "Vamos prençer estes campos";

$modificado = str_pad($txt1,34, "******", STR_PAD_RIGHT);


    print $modificado;

}

/** - Aula 24 - cont_cheare()*/


function aula_24(){


    $txt1 = "Vamos ver estes campos";
    $modifica = count_chars($txt1,0);
    $letra = 0;
/*
    foreach($modifica as $letra -> $frq) {

        echo "Caractere " . chr($letra) . "Aparece" . $modifica . "<br>";
    }
*/
}

/** Aula 25 str_word_cont() */

function aula_25(){


    $txt1 = "Vamos ver estes campos";
    $modificado = str_word_count($txt1);

    echo "O total de palavras é: " . $modificado ."<br>";



}


