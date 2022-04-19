<?php

class Calculadora{
    public float $result = 0;
    
    public function add($x){
        $this->result += $x;
    }

    public function sub($x){
        $this->result -= $x;
    }

    public function multiply($x){
        $this->result *= $x;
    }

    public function divide($x){
        $this->result = $this->result / $x;
    }

    public function total(){
        return $this->result;
    }

    public function clear(){
        $this->result = 0;
    }
}



?>