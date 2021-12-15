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