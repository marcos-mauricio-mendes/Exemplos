<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 14/01/2015
 * Time: 19:52
 */


    include_once "class/TesteGet.php";


    $obj = new TesteGet("1113","Muito Bom",60000);


    echo "Preço  " . $obj->preco;