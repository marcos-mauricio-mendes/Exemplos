<?php


include 'Animal.class.php';
include 'Cao.class.php';
include 'Gato.class.php';


$animal = new Animal();
$cao = new Cao();
$gato = new Gato();


$cao->dono='João';
$gato->raça='Vira-lata';




//metodos
$cao->emitirsom();
$gato->emitirsom();
$animal->emitirSom();



?>