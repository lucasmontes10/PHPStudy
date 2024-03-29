<?php
$idade = 25;
if ($idade > 18){
    echo "Maior de Idade";
}else{
    echo "Menor de Idade";
}

$menor_idade = ($idade > 18)? true: false;

echo "<br/> <br/>";
echo $menor_idade;
//Condicional ternario nada mais é que uma condicional escrita em apenas uma única linha


//Condicional Null Cao
//Muito parecido com o condicional ternário

$nome_condicional = "Lucas";
$nome_completo =  $nome_condicional;
$nome_completo .= isset($sobrenome_condicional)? $sobrenome_condicional: ' ';//Ou seja se existir sobrenome ele escreve o próprio sobronome
//caso contrario entrará com uma string vazia, isso é utilizado para evitar que de erro no codigo
$nome_completo .= isset($sobrenome_condicional)? $sobrenome_condicional: ' ';
//Ou seja se existir sobrenome ele escreve o próprio sobronome
//caso contrario entrará com uma string vazia, isso é utilizado para evitar que de erro no codigo
//Esse é o operador null caos
$sobrenome_teste = "adamastor";
$nome_completo .= $sobrenome_teste ?? "Não existe essa variavel"; //Aqui coloco apenas a negativa do termo
echo $nome_completo;

//Condicional Switch 
$tipo = "string";
switch ($tipo){
    case "inteiro":
        echo "Não foi possivel";
        break;
    case "Booleano":
        echo "Não foi possível";
        break;
    case "string":
        echo "Opa! Encontramos hoje";
        break; 
}

//Loop em php
//Primeiro laço visto era o while
echo "<br/><br/>";
$numero = 0;
while ($numero < 10){
    echo $numero."<br/>";
    $numero += 1;
}

//Loop agora o for
//Repetição definida
echo "<br/>";

for ($i = 0; $i <= 4; $i++){
    echo "Lucas é bonito"."<br/>";
}
//Aqui a repetição acontecerá de algumas vezes

//Repetição for each

$ingredientes = [
    "Leite",
    "Farinha", "Queijo", "Morango"
];
echo "<br/>";
echo "<ul>";
foreach($ingredientes as $valor){
    echo "<li>".$valor."</li>";
}
echo "<ul/>";


foreach ($ingredientes as $chave => $valor){
    echo "o ingrediente de numero ".($chave + 1)." e o ingrediente: ".$valor."<br/>";
}
//A vantagem do foreach é trabalhar com arrays, visto que você percorre com facilidade cada elemento