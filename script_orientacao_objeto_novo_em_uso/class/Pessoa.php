<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 09:35
 */

class Pessoa {


    public $codigo;
    public $nome;
    public $altura;
    public $idade;


    //Metodo Construtor

    function __construct($codigo,$nome,$altura,$idade){

        $this->codigo  = $codigo;
        $this->nome    = $nome;
        $this->altura  = $altura;
        $this->idade   = $idade;

    }




    //*****Criando os metodos de minha classe  Imprimir,Crescer,envelhecer*****

    function Imprimir(){

        echo "<br>"."<br>"."<strong>-Imprimindo os dados de minha Classe Atualizados-</strong>"."<br>"."<br>";
        echo "O codigo é:  " . $this->codigo . "<br>". "<br>";
        echo "O nome é:  "  . $this->nome . "<br>". "<br>";
        echo "A altura é:  "  . $this->altura . "<br>". "<br>";
        echo "A idade é:  "  . $this->idade . "<br>". "<br>";

    }
    //Metodo crescer
    function crescer($alt){

        if($alt > 0) {

            $this->altura += $alt;
        }

    }

    //Metodo envelhecer
    function envelhecer($id){

        if($id >0){

            $this->idade += $id;

        }

    }

}


