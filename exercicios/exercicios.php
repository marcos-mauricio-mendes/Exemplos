<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 27/01/2015
 * Time: 21:55
 */

class exercicios  {


    public $val1;
    public $val2;
    public $val3;
    public $val4;
    public $val5;
    public $val6;
    public $val7;
    public $val8;
    public $val10;

    public function __construct($va1,$va2){

        $this->val1 = $va1;
        $this->val2 = $va2;



    }


    public function imprimir($ab){
         $this->ab = $ab;
        if($this->val1 == $this->val2){

            print "Valores iguais";

        }else{

            for($i=0;$i <= $this->val2;$i++){

                print "Valores diferentes " . $i . " $this->val2 " . " <br> ";

                print "<br>" . "\n" .$this->ab;
            }

        }


    }

    public function somar(){

    self::imprimir(-);

}



}

$opa = new exercicios(50,180);

$opa->imprimir(->);

$opa->somar();