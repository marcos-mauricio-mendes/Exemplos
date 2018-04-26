<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 21:21
 */

    include_once "class/calculadora.php";

    $calc = new calculadora();

    echo $calc->soma(10,50)."<br>";

    echo $calc->subtrair(30,50)."<br>";

    echo $calc->multiplicaca(70,30)."<br>";

    echo $calc->divisao(70,7). "<br>";


