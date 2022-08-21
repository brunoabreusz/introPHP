<?php

$arrayValue = [ 'a', 'b', 'c', 'd', 'e'];

foreach($arrayValue as $key => $arrayValues){
    echo "{$key} => $arrayValues <br>";
}

foreach($arrayValue as $arrayValues){
    echo "$arrayValues <br>";
}