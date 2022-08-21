<?php

var_dump(is_dir('...')); // -> verifica se um certo diretório está criado ou não.
var_dump(mkdir('a')); // -> criar arquivos com php
rmdir('a'); // -> remove um diretorio

var_dump(getcwd()); // mostra o caminho.
var_dump(scandir('../operadores-condicionais')); // mostrar o que tem nos diretorios.


echo '<pre>';
var_dump(glob('../*'));