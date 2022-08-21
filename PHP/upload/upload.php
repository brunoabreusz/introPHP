<?php

$foto = $_FILES['foto'];
if(move_uploaded_file($foto['tmp_name'], $foto['name'])){
    echo 'Deu bom';    
}else{
    echo 'Falhou';
}

echo '<hr>';

var_dump($_FILES);