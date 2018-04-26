<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 14:34
 */

    class ContaCorrente extends Conta {


        public $limite;

        //Criando o método construtor
        function __construct($agencia,$numconta,$datadeabertura,$nometitular,$saldo,$limite){

            //Construtor da classe mãe

            parent::__construct($agencia,$numconta,$datadeabertura,$nometitular,$saldo);

            $this->limite = $limite;


        }
        //Sobreescrevendo o metodo saca da Classe-mãe

        function Sacar($valor){

            if(($this->saldo + $this->limite) >= $valor){

                //Chamar o método sacar da classe mãe

                parent::Sacar($valor);

            }else{

                echo "Não é permitido sacar, saldo insuficiente";

                return false;
            }
            return true;

        }


    }