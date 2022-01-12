<?php
//Para tratarmos de receber informações e recebê-las através de formulários
//não podemos dar nenhum comando antes de dirercionarmos ou tratarmos as informações

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);

//Validando as informações recebidas do formulário
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);

//Fazendo a verificação das informações passadas
if ($nome && $email && $idade){
    include_once('header.php');
    echo "Bem-vindo, ".$nome." sua idade é de ".$idade."<br/>Email: ".$email;
}else{
    header('modulo4.php');
    exit;
    //Para executar esse comando precisamos certificar que não foi enviada nenhuma
    //informação anteriormente
}