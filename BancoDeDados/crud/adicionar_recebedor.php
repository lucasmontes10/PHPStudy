<?php

require "config.php";
require_once "index.php";
require_once "models/Usuario.php";

$nome = filter_input(INPUT_POST, 'name');

$email = filter_input(INPUT_POST, 'email');

if ($nome && $email){

    $new_usuario = new Usuario();
    $new_usuario->setNome($nome);
    $new_usuario->setEmail($email);
    
    $usuarioDAO->add($new_usuario);
    
    // //Vamos verificar no banco de dados se o email já existe
    // $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    // $sql->bindValue(':email', $email);
    // $sql->execute();

    // if ($sql->rowCount() === 0){
    //     //Não podemos adicionar direto, visto que é um metodo muito inseguro e sujeito a diversas
    //     //invasões principalmente SQL injection
    //     $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
    //     //ao fazer esse bind ele faz varios procedimentos de segurança
    //     $sql->bindValue(':name', $nome); // aqui vai pegar o valor atual como se fosse uma passagem por valor
    //     //o bindParam passa como se fosse uma passagem por parametro então se mudar o valor será mudado a passagem tb
    //     $sql->bindValue(':email', $email);
    //     $sql->execute();
    //     header("Location: index.php");
    //     exit;
    // }else{
    //     header("Location:adicionar.php");
    //     exit; 
    // }

}else{
    header("Location:adicionar.php");
    exit;
}