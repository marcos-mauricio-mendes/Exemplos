<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 14:34
 */
/*** A Classe ContaPoupança erda de conta ***/
    class ContaPoupaca extends Conta {


        public $aniversario;



        //Criando o metodo construtor sobre-escrevendo o construtor da clase mãe
        function __construct($agencia,$numconta,$datadeabertura,$nometitular,$saldo,$aniversario) {

            //Chamar o metodo construtor da classe-mãe
            parent::__construct($agencia,$numconta,$datadeabertura,$nometitular,$saldo);
            $this->aniversario = $aniversario;

        }

         //Sobreescrevendo o método sacar da classe mãe
        function Sacar($valor){

            if($this->saldo >= $valor){

                //Chamar o método sacar da classe mãe

                parent::Sacar($valor);

            }else{

                echo "Não é permitido sacar, saldo insuficiente";

                return false;
            }
            return true;

        }



    }











/** Nada de novidades ! Utilizo por que o curso que faço de formação PHP usa ele, mas é uma ótima ferramenta */


/*** obrigado pelo contato e até mais ***/