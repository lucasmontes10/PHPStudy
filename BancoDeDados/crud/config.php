<?php

$data_base = "test";
$host = "127.0.0.1";
$usuario = "root";
$senha = '';

$pdo = new PDO("mysql:dbname=".$data_base.";host=".$host, $usuario, $senha);

