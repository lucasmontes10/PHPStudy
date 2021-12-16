<?php

function Soma($a, $b){
    return $a + $b;
}

$x = 15;
$y = 10;
$soma = Soma($x, $y);
echo $soma;

echo "<br/><br/>";
//Podemos tipar o que vai ser passado como parâmetro, por exemplo

function Multiplicacao(int $a, int $b, int $c = 1){ // Esse valor de c é caso não seja passado o parâmetro
    echo ($a * $b * $c);
}

Multiplicacao(5, 2, 5);

//Função anônima: São funções sem nomes que podem ser armazenadas em variaveis

$funcao_Dizima = function(int $valor){
    return $valor * 0.1;
};

$dizima = $funcao_Dizima;
echo "<br/><br/>";
echo $dizima(10);
echo "<br/><br/>";
echo $funcao_Dizima(50);

//Função Flecha (Arrow)

echo "<br/><br/>";

$soma_Flecha = fn($x1, $x2 = 0) => $x1 + $x2;
echo $soma_Flecha(10, 5);


