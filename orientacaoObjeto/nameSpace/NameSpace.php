<?php
//Encapsular classes funções dentro de um grupo, para usar classes com o mesmo nome dentro
//de uma mesma aplicação

require_once 'classe1.php';
require_once 'classe2.php';

use classe2\minhaClasse as segunda;

$classe1 = new classe1\minhaClasse();
$classe2 = new segunda();

echo "Primeira informação ".$classe1->identificador()."<br/>";
echo "Segunda informação ".$classe2->identificador()."<br/>";

