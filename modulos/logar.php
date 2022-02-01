<?php 
//aqui iremos trabalhar com a questão de sessões em php

//SESSÃO: consigo armanezar informações, e etc

//Cookie: Pedaço de informação que identifica quem é você, sessão não fica no computador do usuário
session_start();
$emailLogin = filter_input(INPUT_GET, 'emailLogar', FILTER_SANITIZE_EMAIL);
$senhaLogin = filter_input(INPUT_GET, 'senhaLogar');
if ($emailLogin != 'lucas@gmail.com' && $senhaLogin != '123'){
    $_SESSION['avisos'] = 'Informações errada';
    header("Location: modulo4.php");
    exit;
}else{
    $_SESSION['usuario'] = $emailLogin;
    $_SESSION['senha'] = $senhaLogin;
    $emailLogin = explode('@', $emailLogin);
    echo "Seja bem-vindo, ".$emailLogin[0].". Como você está?";
}