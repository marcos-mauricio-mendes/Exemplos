<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 19:44
 */

class TesteGet{

    public      $codigo;
    public      $descricao;
    private     $preco;

    function __construct($codigo, $descricao, $preco){

        $this->codigo       = $codigo;
        $this->descricao    = $descricao;
        $this->preco        = $preco;


    }

    function __get($propriedade){


        if($propriedade == 'preco'){


           return number_format($this->$propriedade,2,',','.');

        }

    }

}