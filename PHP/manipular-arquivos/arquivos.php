<?php

var_dump(touch('test.txt')); // cria arquivo
var_dump(rename('test.txt', 'teste2.txt')); // renomeia
var_dump(file_exists('test.txt')); // verifica se existe
var_dump(copy('test.txt', 'teste2.txt')); // copia.
var_dump(unlink('test.txt')); // remove arquivo