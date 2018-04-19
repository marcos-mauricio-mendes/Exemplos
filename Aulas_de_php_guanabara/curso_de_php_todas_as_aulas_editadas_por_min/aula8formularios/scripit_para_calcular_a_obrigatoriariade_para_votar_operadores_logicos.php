<?PHP
//Script para calcular a obrigatoriaridade para votar insira a data de nascimento

$ano = $_GET["an"];
$idade = 2014 - $ano;

echo "Quem nasceu em $ano tem idade de $idade <br>";

$tipo = ($idade >=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO ";

echo " E dessa forma seu voto e: $tipo";







?>