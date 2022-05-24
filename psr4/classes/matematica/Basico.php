<?php

namespace matematica;


class Basico{
    private $x, $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function somar(){
        return $this->x + $this->y;
    }
}