<?php

require "config.php";
require_once "dao/usuarioDAOMySql.php";
$usuarioDAO = new usuarioDAOMySql($pdo);

$nome = filter_input(INPUT_POST, 'name');

$email = filter_input(INPUT_POST, 'email');

$id = filter_input(INPUT_POST, 'id');


if ($id && $nome && $email){
    //aqui podemos criar um objeto usuario e enviar ele para update
    $usuario = $usuarioDAO->findById($id);
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuarioDAO->update($usuario);

    // //Vamos verificar no banco de dados se o email já existe
    // $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
    // $sql->bindValue(':name', $nome);
    // $sql->bindValue(':email', $email);
    // $sql->bindValue(':id', $id);
    // $sql->execute();
    // header("Location:index.php");
    // exit; 
}else{
    header("Location:editar.php?id=".$id);
    exit;
}