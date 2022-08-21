<?php

$linguagem = ['Java', 'Python', 'Javascript', 'PHP'];

var_dump($linguagem);
array_pop($linguagem); // remove o ultimo.

echo '<br><br>';
array_shift($linguagem); // remove o primeiro.
var_dump($linguagem);

echo '<br><br>';
unset($linguagem[0]); // deleta um indice ou a váriavel.
var_dump($linguagem);

echo '<br><br>';
array_push($linguagem, 'C++'); // inserir um array na ultima posição
var_dump($linguagem);

echo '<br><br>';
array_unshift($linguagem, 'Assembly'); // insere um array na primeira posição.
var_dump($linguagem);

echo '<br><br>';
array_unique(); // remove arrays duplicados.