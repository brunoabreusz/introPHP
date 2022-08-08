<?php

$name = "bruno de abreu de souza";

echo strtoupper($name); // Maisculo
echo '<hr>';
echo strtolower($name); // Minusculo
echo '<hr>';
echo ucfirst($name); // Primeiro caracter maisculo
echo '<hr>';
echo ucwords(strtolower($name)); // a cada palavra a primeira letra fica maiscula.