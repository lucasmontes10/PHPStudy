<?php

use matematica\Basico as Teste;

require_once "autoload.php";

$matematica = new Teste(10, 10);
echo $matematica->somar();

?>