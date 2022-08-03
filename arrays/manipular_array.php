<?php

// $nomes = array('Bruno', 'Marcinho', 'Marcos');

$nomes = 'Bruno';
$empresa = 'Arpen-BA';
$year = 2022;

//$info = [$nomes, $empresa, $year];
$info = compact('nomes', 'empresa', 'year');

/*
var_dump(is_array($info)); -> Se é um array
var_dump(in_array('Bruno', $info)); -> Se existe um valor no array
*/

$infoCompany = [
    'name'      => 'arpen',
    'founder'   => 'daniel',
    'year_current' => '2010'
];


$mvpCompany = [
    'nome'      => 'mvp-company',
    'fundador'   => 'dero',
    'ano' => '2022'
];
/*
var_dump($infoCompany['name']);

var_dump(array_keys($infoCompany)); // Chaves do array

var_dump(array_values($infoCompany)); // Resultados do array

var_dump(count($infoCompany)); // Conta os itens do array
*/
$infoCompany = array_merge($infoCompany, $mvpCompany);

var_dump($infoCompany);