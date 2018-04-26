<?

// aqui começa o script
//pega as variaveis por POST
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

global $email; //função para validar a variável $email no script todo

$data = date("d/m/y"); //função para pegar a data de envio do e-mail
$ip = $_SERVER['REMOTE_ADDR']; //função para pegar o IP do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; //função para pegar o navegador do visitante
$hora = date("H:i"); //para pegar a hora com a função date

//aqui envia o e-mail para você
mail ("giovanniprade@yahoo.com.br", //email aonde o php vai enviar os dados do form
"$assunto",
"Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nSite: $site\nE-mail: $email\nTelefone: $fone\n\nMensagem: $mensagem",
"From: $email"
);

//aqui são as configurações para enviar o e-mail para o visitante
$site = "giovanniprade@yahoo.com.br"; //o e-mail que aparecerá na caixa postal do visitante
$titulo = "GPrade.com"; //titulo da mensagem enviada para o visitante
$msg = "$nome, obrigado por entrar em contato";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
"$titulo",
"$msg",
"From: $site"
);
echo "<p align=center>$nome, sua mensagem foi enviada com sucesso!</p>";
echo "<p align=center>Estarei retornando em breve.</p>";
echo "<p align=center>www.gprade.com</p>";
//retorna a pagina do formulario 
echo "<meta http-equiv=\"refresh\" content=\"10;url=java script:history.back(1)\">";

?>
