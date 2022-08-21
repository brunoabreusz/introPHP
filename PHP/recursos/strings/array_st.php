<?php

$state = 'São Paulo/SP';
$arrayState = explode('/', $state);

var_dump($arrayState[1]);

echo '<hr>'; // explode, é um delimitador que faz a string virar um array.

$info = 'São Paulo/SP/BR/Terra';
$arrayInfo = explode('/', $info);

var_dump($arrayInfo);

echo '<hr>';

var_dump(implode($arrayInfo, '#')); // Junta os arrays e vira string

echo '<hr>';
