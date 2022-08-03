<?php

$familia = [
  0 =>  'Pai',
  1 =>  'Tio', 
  2 =>  'Mae', 
  3 =>  'Irmão', 
];

echo '<pre>';
arsort($familia); // ordena os valores em ordem alfabetiza do (z-a)
var_dump($familia);
echo '<hr>';


echo '<pre>';
asort($familia); // ordena os valores em ordem alfabetiza do (a-z)
var_dump($familia);
echo '<hr>';


echo '<pre>';
sort($familia); // ordena os valores e as chaves em ordem alfabetiza do (a-z)
var_dump($familia);
echo '<hr>';