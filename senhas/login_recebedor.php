<?php

require_once "login.php";

$senhaAtual = filter_input(INPUT_POST, 'senha');


if (password_verify($senhaAtual, $hash)){
    echo "Bem vindo ao sistema senhor";
    header("Location:index.php");
    exit;
}else{
    header("Location:index.php");
    exit;
}