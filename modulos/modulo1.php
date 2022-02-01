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

echo "<br/> <br/>";

$carros_do_sonho = [
    "camaro",
    "porsche",
    "onix",
    "crono"
];

print_r($carros_do_sonho, false);

//Operador Spread

//Uso de uma variável dentro de um array para evitar assim repetições de itens no outro array

$lista_churras = ["Carne", "Frango", "Queijo", "bebidas"];

$lista_de_compras = [...$lista_churras, "descartaveis", "carvão"];
echo "<br/> <br/>";
print_r($lista_de_compras, false);

?>
<br/>
<h1> Essa pagina funciona como titulo também </h1>
<hr>
<br/>