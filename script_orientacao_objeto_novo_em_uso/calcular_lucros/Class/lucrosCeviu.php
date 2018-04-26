<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 25/01/2015
 * Time: 20:16
 * Sistema simples para calculo por amostragem de valores e média. É possivel alimentar o sistema com novos valores em
 * seu objeto ($con) ou mais utilizando ou comando $_POST[''] para criar algo mais avançado para calulos de futuros projetos;
 */
class lucrosPorcento{


    public  $mensalidade;
    public  $soma;
    public  $valortotal;
    public  $porcentagem;
    public  $media;
    private $valorparadivicao = 100;
    public  $valorfixo;


    public function __construct($mensalidade,$valortotal,$porcentagem){


        $this->mensalidade  = $mensalidade;
        $this->valortotal   = $valortotal;
        $this->valorfixo    = $porcentagem;
        $this->porcentagem  = $porcentagem / $this->valorparadivicao;



    }

    public function porcentagem(){

        $this->media =  $this->valortotal * $this->porcentagem;

    }

    public function soma(){


        $this->soma = $this->media * $this->mensalidade;

    }

    public function  imprimir(){

        print "<hr>"."<strong>Sua amostra é de:  " . " <span>". number_format($this->valortotal, 0, '.', '') . "</span>" . "<br>".
            "E o seu valor gasto mensalmente é: <span> R$" . number_format($this->mensalidade,2,',',' ') ."</span> mês." ."<br>".
            "E só ". $this->valorfixo ."% deste pessoal dá: <span>" . number_format($this->media,0,'.','.')."</span>".
            " então somente tendo base nisso pagando mensalmente o que temos?"."<br>";

        print "<hr>"."<strong id='azul'>Media de lucros mensais: </strong>  " .
            "<div  id='fundo'>" . "<hr>"  ."<h1>" . "R$". number_format($this->soma,2,',','.') ."</h1>"."<hr>"."</div>";

    }

}

