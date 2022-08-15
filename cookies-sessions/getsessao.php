<?php

session_start();
echo $_SESSION['nome'];

if(!isset($_SESSION['auth'])){
    header('Location:setsessao.php');
}

echo 'Painel do ADM';