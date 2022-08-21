<?php

$a = 1;
$b = 1;

if ($a == $b AND $a == 2){ // E [&&]
    echo "ok\n";
}else {
    echo "not ok\n";
}

echo '<hr>';

if ($a == $b OR $a == 2){ // OU [||]
    echo "ok\n";
}else {
    echo "not ok\n";
}