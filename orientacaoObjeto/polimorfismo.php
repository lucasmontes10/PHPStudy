<?php
//Polimorfismo varias classes que apresentam a mesma forma, por exemplo métodos iguais, na qual
//você pode usar sem se interessar em qual classe ta usando

interface Figura{
    public function getType();
    public function getArea();
}
class Quadrado implements Figura{
    private $lado;
    public function __construct(int $lado)
    {
        $this->lado = $lado;
    }
    public function getType()
    {
        return "Quadrado";
    }
    public function getArea()
    {
        return ($this->lado * $this->lado);
    }
    
}   

class Circulo implements Figura{
    private $raio;
    public function __construct($raio){
        $this->raio = $raio;
    }
    public function getType()
    {
        return "Circulo";
    }
    public function getArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
}

$circulo = new Circulo(3);
$quadrado = new Quadrado(8);

$figuras = [
    $circulo,
    $quadrado
];

//A interface é um exemplo classico de polimorfismo, pois todas as classes que vão implementar
//Apresentam essa característica
foreach($figuras as $item){
    $tipo = $item->getType();
    $area = $item->getArea();
    echo "Area ".$tipo." e tem area igual a ".$area."<br/>";
}
?>
