<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 06/01/2015
 * Time: 23:27
 */


$recebe=$_POST['datinha'];

print $recebe;

/* Inserindo minha classe e div alternativa sem prescizar digitar ela toda hora */

function tipo_css1(){

    echo "<div class=\"tipo\">";

}



function tipo_css_fecha1(){

    echo "</div>";
}
/* Fechando minha classe alternativa */


/** Mostrando a data em tela */

function aula_00(){

//

    date_default_timezone_set('Brazil/East');
   echo date('d/m/Y H:i:s' );

    echo "<br>" ."<br>";
    echo "D:" . date('D') . "<br>";
    echo "l:" . date('l') . "<br>";
    echo "M:" . date('M') . "<br>";
    echo "d:" . date('d') . "<br>";
    echo "j:" . date('j') . "<br>";
    echo "n:" . date('n') . "<br>";
    echo "t:" . date('t') . "<br>";
    echo "z:" . date('z') . "<br>";
    echo "<hr>" . "<br>";


    echo "hora atual: " . date('H:i:s') . "<br>" . "<br>";
    echo "h: " .date('h') . "<br>" . "<br>";
    echo "H: " .date('H') . "<br>" . "<br>";
    echo "i: " .date('i') . "<br>" . "<br>";
    echo "s: " .date('s') . "<br>" . "<br>";
    echo "a: " .date('a') . "<br>" . "<br>";
    echo "A: " .date('A') . "<br>" . "<br>";
    echo "g: " .date('g') . "<br>" . "<br>";
    echo "G: " .date('G') . "<br>" . "<br>";
    echo "T: " .date('T') . "<br>" . "<br>";
    echo "U: " .date('U') . "<br>" . "<br>";
    echo "w: " .date('w') . "<br>" . "<br>";
    echo "W: " .date('W') . "<br>" . "<br>";
    echo "I: " .date('I') . "<br>" . "<br>";
    echo "L: " .date('L') . "<br>" . "<br>";
}

function aula_09(){



    $data = strtotime("1945-08-01");
    $datadehoje = time();

    //Transformando 1 dia em segundos
    $umdia = 24*60*60;

    echo "Minha data antiga que quero encontrar o seus dias passados: " . $data ."<br>" . "<br>" ;

    echo "Minha data atual em segundos: " . $datadehoje . "<br>" . "<br>" ;

    echo "<br>"."Qauntos segundos tem em um dia" . $umdia . "<br>" . "<br>" ;

    $diferenca = ($datadehoje - $data)/$umdia;

    echo "<br>" . " Bem o fim dá segunda grande guerra e de: " . $diferenca . " dias. " . "<br>" . "<br>";


    echo "Tem em Anos : " . "<strong>" . $tudo = (25363 / 365) . "</strong>" . "que terminou isso" . "<br>" . "<br>";
}

/** Aula 10 -  */
function aula_10(){


    $datadehoje = time();

    echo "Este valor: " .$datadehoje . " Transformado em data ai em baixo " . "<br>" . "<br>";

    echo date("d/m/Y",1420820941 ) . "<br>";




}

/** Aula 11 - usando o time() e o strtotime()*/
function aula_11(){

    $data = date("y-m-d");

    echo "$data" . "<br>" . "<br>";

    $minhaData = date("10/03/2014");
    $dia = "<br>" . $minhaData . "<br>". "<br>";
    $dia = date("d", strtotime($minhaData));
    $mes = date("m", strtotime($minhaData));
    $ano = date("Y", strtotime($minhaData));


    echo "<br> dia: " . $dia . " <br> meses: " . $mes . "<br> ano: " . $ano;




}

/**Aula 12 - Operações com datas */

function aula_12(){



    $data = date("Y-m-d II:i:s");
    echo "data padrão: " . $data . "<br>" . "<br>" ;
    $minhaData = date("d/m/Y II:i:s" .strtotime($data.'+10days'));
    echo "<br>" . $minhaData . "<br>";


}


/***Aula 13 - ***/



function aula_13(){

    $data = date("Y m d H:i:s");
    $minhaData = mktime(date("H"),date("i"),date("s"), date("m")+2,date("d"),date("Y")+1);


    echo date("d/m/y H:i:s", $minhaData);


}
/** Aula 14 - 15 - Função para somar datas **/


function somar_data($data, $dias, $meses, $ano){

    $data = explode("/", $data);
    $resData = date("d/m/Y", mktime(0,0,0, $data[1]+$meses,$data[0]+$dias,$data[2]+$ano));
    return $resData;


}

/** Aula 16 */

function dataBr($data, $opt) {

    if($opt == 1){


        $data = explode("/", $data);
        $databr = $data[2]."-".$data[1]."-".$data[0];



    }else{

        $data = explode("-", $data);
        $databr = $data[2]."/".$data[1]."/".$data[0];

    }

    return $databr;

}