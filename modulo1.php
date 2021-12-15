<?php
$nome = "Lucas Montes"; //Variavel do tipo string
$idade = 15; //variavel do tipo inteiro
$dormindo = false; //variavel do tipo booleana
$vazia = null;
$array = [null, 10, "true", function(){}];
var_dump($array); //Printa na tela o tipo de dado de cada elemento da lista
echo "<br/> <br/>";
$nome_1 = "Lucas";
$sobrenome = "Montes";
$nomecompleto = $nome_1;
$nomecompleto .= $sobrenome;
echo $nomecompleto;
