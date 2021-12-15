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
