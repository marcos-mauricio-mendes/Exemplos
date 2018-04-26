<?php
/**
 * Created by Sistema de Calculadora
 * User: Marcos
 * Date: 14/01/2015
 * Time: 20:45
 */

class calculadora {

    const adicao         = 1,
          subtracao      = 2,
          mutiplicacao   = 3,
          divisao        = 4;

    private $operando,
            $resultado;


    /*** Criacao dos Metodos ***/

    public function soma($val1,$val2){

        $this->validar($val1,$val2);
        $this->operacao(self::adicao);
        return $this->resultado;


    }
    public function subtrair($val1,$val2){

        $this->validar($val1,$val2);
        $this->operacao(self::subtracao);
        return $this->resultado;


    }
    public function multiplicaca($val1,$val2){

        $this->validar($val1,$val2);
        $this->operacao(self::mutiplicacao);
        return $this->resultado;


    }
    public function divisao($val1,$val2){

        $this->validar($val1,$val2);
        $this->operacao(self::divisao);
        return $this->resultado;


    }
    public function validar(){

        // func_get_arg() vai retornar um array onde cada elemeto corresponde ao mesmo da lista de argumentos da função atual
        $val = func_get_args();
        for($i=0;$i<count($val);$i++){

            if(!is_numeric($val[$i])){

                throw new Exception(sprintf("Valor '$s' não é válido", $val[$i]));

            }

        }

        $this->operando = $val;
        return true;

    }

    public function operacao($operador){

        switch($operador){

            case self::adicao;
            $this->resultado = $this->operando[0]+$this->operando[1];
                break;

        }

        switch($operador){

            case self::subtracao;
                $this->resultado = $this->operando[0]-$this->operando[1];
                break;

        }
        switch($operador){

            case self::mutiplicacao;
                $this->resultado = $this->operando[0]*$this->operando[1];
                break;

        }
        switch($operador){

            case self::divisao;
                $this->resultado = $this->operando[0]/$this->operando[1];
                break;

        }


    }
} 