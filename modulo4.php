<?php
//Iremos nesse modulo tratar de alguns assuntos importantissimos
//Formulários, Validações, e etc

//Http Request
include("header.php");
//Post envia internamente os dados
//Get envia atraves da própria url
//Se eu não falo a minha action ele envia para meu próprio arquivo/tela
?>

<form method="POST" action="recebedor.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>
    <label>
        Idade:
        <br/>
        <input type = "text" name="idade"/>
    </label>
    <br/>
    <br/>
    <input type="submit" value = "enviar">
</form>