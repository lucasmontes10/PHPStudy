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

