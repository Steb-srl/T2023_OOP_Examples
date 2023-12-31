<?php
require_once('FiguraGeometrica.php');

class Cerchio extends FiguraGeometrica {
    protected float $radius;

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

    function __toString(): string {
        $string = 'Cerchio<br>Raggio : ';
        $string .=  $this->getRaggio();
        $string .=  '<br>Area : ';
        $string .=  $this->calcolaArea();
        $string .=  '<br>Circonferenza : ';
        $string .=  $this->calcolaPerimetro();
        $string .=  '<br>';
        return $string;
    }
}
