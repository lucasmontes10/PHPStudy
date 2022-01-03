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
//Podemos chamar a própria variável
echo "<br/>Ola estamos aqui: ".$funcao_Dizima(10)."<br/>";
echo "<br/><br/>";
echo $dizima(10);
echo "<br/><br/>";
echo $funcao_Dizima(50);

//Função Flecha (Arrow)

echo "<br/><br/>";

$soma_Flecha = fn($x1, $x2 = 0) => $x1 + $x2;
echo $soma_Flecha(10, 5);


//Funções recursivas

//Contrato: Vamos supor que tenhamos o fatoria de (n-1)! para chegar ao fatorial basta multiplicar pelo mesmo número
echo "<br/><br/>";

function fatorial(int $valor){
    if ($valor <= 1){
        return (1);
    }else{
        return $valor * fatorial($valor - 1);
    }
}

echo fatorial(5);
echo "<br/><br/>";
$numero_Arrendodar = 0.7;
//Basta acessar a documentação para verificar as funções nativas matemáticas
//https://www.php.net/manual/pt_BR/ref.math.php
echo ceil($numero_Arrendodar);

//Funções nativas de String
//https://www.php.net/manual/pt_BR/book.strings.php

$texto = "Ola, tudo bem? Como vai?";
$texto = strtoupper($texto);
echo "<br/><br/>";
echo $texto;
if (strcmp($texto, "tudo bem?") == 1){
    echo "Strings iguais";
}else{
    echo "strings Diferentes";
}

//O split em diversas linguagens aqui chamamos de explode

$clube = "Clube de Regatas do Flamengo";
$clube_Junto = explode(" ", $clube);
echo "<br/><br/>";
print_r($clube_Junto);


//Utilizando o explode que pega uma string e transforma em array

$testeExplode = "Ola que dia lindo de se ver!";
$arrayTexto = explode(' ', $testeExplode);
print_r($arrayTexto);
$arrayTexto = str_split($testeExplode);
echo "<br/>";
print_r($arrayTexto);

//Utilizando o number Format 

$dataTeste = 11254.98;
echo number_format($dataTeste, 1, ',', '.');
//Primeiro parametro é a própria variavel, quantidade de decimais, simbolo dos decimais, simbolo dos milhares
//Importante observar que coloquei apenas um decimal caso não seja possível ele faz a aproximação