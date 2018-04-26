<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 10:35
 */


/**abstract**/  class Conta {

    public $agencia;
    public $numconta;
    public $datadeabertura;
    public $nometitular;
    public $senha;
    public $saldo;
    public $status;

    //Método Construtor

    function __construct($agencia,$numconta,$datadeabertura,$nometitular,$saldo){

        $this->agencia        = $agencia;
        $this->numconta       = $numconta;
        $this->datadeabertura = $datadeabertura;
        $this->nometitular    = $nometitular;
        $this->saldo          = $saldo;


    }

    /*** Método destrutor

    function __destruct(){

        echo " A conta: " . $this->numconta . " foi finalizado ";

    }
    ***/
    // Os métodos de minha classe Conta: Sacar,Depositar,Versaldo


    function Sacar($valor){


        if($valor > 0){

            $this->saldo -= $valor;

        }

    }
    //Metodo Depositar
    function Depositar($valor){
        
        if($valor >0){

            $this->saldo += $valor;

        }
    }
    //Metodo Versaldo
    function Versaldo(){


      echo   $this->saldo;

    }


}