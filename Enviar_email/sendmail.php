<html lang="pt-br">
<head>
    
    
<title>Envio de email</title>
<meta charset="utf-8" />
      
    </head>
    <body>
<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];

?>

<?php

$to = "marcos@3mainformatica.com.br";
$subject = "$assunto";
$message = "<strong>Nome: $nome <br /><br /></strong> <strong>E-mail:</strong> $email<br /><br /><strong>Assunto:</strong> $assunto <br /><br /><strong>Mensagem:</strong> $mensagem";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";   
$header .= "From: $email\n";
mail($to, $subject, $message, $header);
echo "Mensagem enviada com sucesso!";
    
?>
    
    
    
    
    
    
    </body>
  </html>