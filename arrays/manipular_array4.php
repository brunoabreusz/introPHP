<?php

$idades = [12, 13, 14, 20, 22, 21];

echo $idades[1];

echo '<br>';

echo end($idades);

echo '<br>';

$maiorIdade = array_filter($idades, function($age){
    return $age >= 18;
});

echo count($maiorIdade);

$names = ['bruno', 'marcos', 'pedro'];

$names = array_map($names, function ($name){
    return strtoupper($name);
}, $names);

var_dump($names);
