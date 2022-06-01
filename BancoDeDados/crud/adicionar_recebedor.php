<?php

require "config.php";

$nome = filter_input(INPUT_POST, 'name');

$email = filter_input(INPUT_POST, 'email');

if ($nome && $email){
    //Não podemos adicionar direto, visto que é um metodo muito inseguro e sujeito a diversas
    //invasões principalmente SQL injection
    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
    $sql->bindValue(':name', $nome); // aqui vai pegar o valor atual como se fosse uma passagem por valor
    //o bindParam passa como se fosse uma passagem por parametro então se mudar o valor será mudado a passagem tb
    $sql->bindValue(':email', $email);
    $sql->execute();
    header("Location: index.php");
    exit;
     
}else{
    header("Location:adicionar.php");
    exit;
}