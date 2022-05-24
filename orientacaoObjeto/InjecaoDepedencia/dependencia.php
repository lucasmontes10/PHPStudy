<?php

interface matematicaBase{
    public function somar($x, $y);
}

class Basico1 implements matematicaBase{
    public function somar($a, $b){
        return $a + $b;
    }
}

class Basico2 implements matematicaBase{
    public function somar($x, $y){
        $soma = $x;
        for ($i = 0; $i < $y; $i++){
            $soma ++;
        }
        return $soma;
    }
}

class MatematicaGeral{
    private $geral;
    public function __construct(matematicaBase $base)
    {   
        $this->geral = $base;
    }
    public function somar($x, $y){
        return $this->geral->somar($x, $y);
    }
}

$soma1 = new MatematicaGeral(new Basico1());
$soma2 = new MatematicaGeral(new Basico2());

echo $soma1->somar(10, 15)."<br/>";
echo $soma2->somar(5, 8)."<br/>"; 