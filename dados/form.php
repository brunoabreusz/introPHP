<?php

var_dump($_POST);
echo '<hr> <hr>';

if($_REQUEST['nome'] != '' && strlen($_REQUEST['nome']) > 3){
    echo "nome: {$_REQUEST['nome']}";
    echo '<hr>';
    echo "senha: {$_REQUEST['senha']}";
    echo '<hr>';
    echo "email: {$_REQUEST['email']}";
    echo '<hr>';
    echo "Concordou?".isset($_REQUEST['concordo']) ? 'Sim' : 'Não';
    echo '<hr>';
    echo "sexo: {$_REQUEST['sexo']}";
    echo '<hr>';
    echo "estado: {$_REQUEST['estado']}";
    echo '<hr>';
    echo "descricao: {$_REQUEST['descricao']}";
    echo '<hr>';
}else {
    echo 'Campo nome obrigatório';
}

//Verbos http [get -> exibi todos os dados, post -> não exibi os dados]

/*echo "nome: {$_REQUEST['nome']}";
echo '<hr>';
echo "senha: {$_REQUEST['senha']}";
echo '<hr>';
echo "email: {$_REQUEST['email']}";
echo '<hr>';
echo "Concordou?".isset($_REQUEST['concordo']) ? 'Sim' : 'Não';
echo '<hr>';
echo "sexo: {$_REQUEST['sexo']}";
echo '<hr>';
echo "estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "descricao: {$_REQUEST['descricao']}";
echo '<hr>';

// REQUEST PEGA GET/POST/COOKIES

// echo "nome: {$_POST['nome']}";
// echo '<hr>';
// echo "senha: {$_POST['senha']}";
// echo '<hr>';
// echo "email: {$_POST['email']}";
// echo '<hr>';
// echo "Concordou?".isset($_POST['concordo']) ? 'Sim' : 'Não';
// echo '<hr>';
// echo "sexo: {$_POST['sexo']}";
// echo '<hr>';
// echo "estado: {$_POST['estado']}";
// echo '<hr>';
// echo "descricao: {$_POST['descricao']}";
// echo '<hr>';

// POST SÓ PEGA DO TIPO POST

