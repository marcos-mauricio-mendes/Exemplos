<?php

$paginasdolivro = $_GET["livro"];
$paginaslidaspordia = $_GET["paginasdia"];
$quandosdias = 0;

$quandosdias = $paginasdolivro / $paginaslidaspordia;

echo "Vou gastar e media $quandosdias dias para ler este livro";

?>