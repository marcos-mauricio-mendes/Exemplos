<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 18:37
 */

    class Animal {

    //Definição da constante
    const Nome = "Todos os animais ";

    }

    class Cachorro extends Animal{

        //Definição da constante
        const Patas ="4 patas";
        const Cor   ="Branco";


        function __construct($a){

            echo parent::Nome . self::Patas . self::Cor . $a . "<br>";

        }


    }

echo Animal::Nome;