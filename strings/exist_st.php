<?php

$name = "BR";

if(isset($name)){ // verifica se existe.
    echo $name;
}else {
    echo "não existe";
}

echo '<hr>';

unset($name);
if(isset($name)){ // deleta
    echo $name;
}else {
    echo "não existe";
}