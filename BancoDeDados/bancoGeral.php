<?php

//Utilizaremos em php normalmente um banco de dados relacional, ou seja, um MySql ou MariaDB 
//Sendo MariaDB uma evolução do MySql

//PhpMyAdmin funciona para manipulação de banco de Dados


//Conectando ao banco de dados com o nosso sistema

//iremos conectar com a biblioteca PDO

//instanciando a classe PDO

$pdo = new PDO("mysql:dbname=test;host=127.0.0.1", "root", "");

$sql = $pdo->query("SELECT * FROM usuarios");

echo "Total de registros: ". $sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC); // Aqui ele disponibiliza dos tipos de dados
//quando os indices são apenas numeros ou quando os indices são colunas do banco de dados
//para indices numericos colocar PDO::FETCH_NUM

echo "<pre>";
print_r($dados);

//a conexão significa o nome do banco, onde ta armazenado
//segundo parametro é o usuario do banco
//terceiro é a senha

//o pdo é legal de ser utilizado mais do que mysql connect pois ele possui proteção contra
//o mysql connect

//CRUD
//CREATE REMOVE UPDATE DELETE

