<?php
require_once('FiguraGeometrica.php');

class Cerchio extends FiguraGeometrica {
    protected float $radius = 5;

    function __construct(float $radius) {
        $this->radius = $radius;
    }

    function calcolaArea(): float {
        return $this->radius * $this->radius * 3.1415926;
    }

    function calcolaPerimetro(): float {
        return $this->radius * 2 * 3.1415926;
    }

    function getRaggio(): float {
        return $this->radius;
    }
}
