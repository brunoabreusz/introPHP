<?php

$taxa = 2;

function sum($n1, $n2){
    global $taxa;
    return ($n1 + $n2) * $taxa;
}

echo sum(2,2);