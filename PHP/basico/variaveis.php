<?php

// váriaveis php começam com $
$name = 'Bruno';
$my = "Meu nome é $name";

//echo $my;

$int = 10;
$boolean = false;
$arrayName = ['Bruno', 'Miguel'];
//$objeto = new stdClass;

// recursos

/*mysql_connect(),
mysql_query(),
pg_connect(),
pg_query()
*/

define('NOME', 'Jarbas');
echo "\n". NOME;

const NomeB = 123;
echo NomeB;

if(defined("NOME"))
    echo "Constante declarada.";