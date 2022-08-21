<?php

file_put_contents('test.txt'); // limpa arquivo, e coloca oq você quiser.
file_get_contents('test.txt'); // para ler o arquivo

/*
$file = fopen('test.txt', 'a+');
fwrite($file, "Teste \r\n");

fclose($file);
*/

