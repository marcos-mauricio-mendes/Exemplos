<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 18/01/2015
 * Time: 22:30
 */

class EnviarEmail {


    public $nome;
    public $email;
    public $assunto;
    public $mensagem;
    public $destinatario;
    public $header;
    public $to;
    public $subject;


    function __construct($nome,$email,$assunto,$mensagem,$destinatario){

        $this->nome          =  $nome;
        $this->email         =  $email;
        $this->assunto       =  $assunto;
        $this->mensagem      =  $mensagem;
        $this->destinatario  =  $destinatario;
        $this->to = $this->destinatario;
        $this->subject = $this->assunto;

    }

    function formatarDados(){


        $this->mensagem = "<strong>Nome:</strong> $this->nome; <br /><br /> <strong>E-mail:</strong> $this->email;<br /><br /><strong>Assunto:</strong> $this->assunto; <br /><br /><strong>Mensagem:</strong> $this->mensagem; <br /><br /><hr>";
        $this->header  = "MIME-Version: 1.0\n";
        $this->header .= "Content-type: text/html; charset=utf-8\n";
        $this->header .= "From: $this->email\n";


    }

    function enviar(){

            mail($this->to, $this->subject, $this->mensagem, $this->header);

            echo "Mensagem enviada com sucesso!";

            return true;
    }


}

$contato = new EnviarEmail($_POST['nome'],$_POST['email'],$_POST['assunto'],$_POST['mensagem'],$_POST['destinatario']);

$contato->formatarDados();
$contato->enviar();
