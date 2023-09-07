<?php
require_once('Poligono.php');

class Quadrato extends Poligono {
    function __construct(float $lato) {
        $this->larghezza = $lato;
        $this->altezza = $lato;
    }

    function calcolaArea(): float {
        return $this->larghezza * $this->larghezza;
    }

    function calcolaPerimetro(): float {
        return 4 * ($this->larghezza);
    }
}
