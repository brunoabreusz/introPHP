<?php

$site = 'www.google.com.br';
echo str_replace('www.', 'https//www.', $site);
// é passado um parametro da string e em seguida com o ',' o que será substituido e a variavel da string.

echo '<hr>';
echo substr($site, -7);
// retorna o que foi pedido, a string é dividida em um array. (inicio/final)

echo '<hr>';
echo strlen($site);

