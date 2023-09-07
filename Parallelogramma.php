<?php
require_once('Poligono.php');

class Parallelogramma extends Poligono {
    function __construct(float $lato1, float $lato2) {
        $this->larghezza = $lato1;
        $this->altezza = $lato2;
    }

    function calcolaArea(): float {
        return $this->larghezza * $this->altezza;
    }

    function calcolaPerimetro(): float {
        return 2 * ($this->larghezza)+ 2*($this->altezza);
    }
}