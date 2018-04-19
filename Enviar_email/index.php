<!DOCTYPE HTML>
<html lang="pt_br">
<head>
    
    
<title>Formulário de envio de E-mail</title>
<meta charset="utf-8" />
<link type="text/css" href="estilo.cc" />
    
    <style>
        @import url(http://fonts.googleapis.com/css?family=Righteous);
        body { font-family: 'Righteous', cursive;}
        #corpo {

            width: 380px;
            margin: 0 auto;
            background: deepskyblue;

        }
        h3 {
            text-align: center;


        }
        div {

            background-color: darkturquoise;

        }

        input, button,textarea {

            background-color: azure;

        }

        textarea {

            width: 380px;
            height: 200px;
        }
        span {

           margin: 10px;

        }

    </style>
    </head>
    <body>
    <fieldset id="corpo">
        <h3>Formulário de Envio de Emails</h3>
    <form name="contacform" method="post" action="EnviarEmail.php">

       <div>
           <br>
          <span> Nome:</span>         <input type="text"  max="10" name="nome"    placeholder="Nome Completo" /><br /><br />
           <span>E-mail:</span>       <input type="email" max="12" name="email"   placeholder="Seu Email" /><br /><br />
           <span>Assunto:</span>      <input type="text" name="assunto" placeholder="Assunto"/><br /><br />
       </div>
        <fieldset><legend>Mensagem</legend>

            <textarea  maxlength="250"  name="mensagem" placeholder="Seu Texto Aqui"></textarea><br />

        </fieldset>
        <br>
        Destinatario: <input type="email" max="12" name="destinatario" placeholder="Quem irá Receber"/><br />
        <br>
        <button type="submit" name="Enviar">Enviar Agora!!!</button>

    </form>
    </fieldset>
    </body>
    
</html>