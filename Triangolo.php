<?php
require_once('Poligono.php');

class Triangolo extends Poligono {
    function __construct(float $base, float $altezza) {
        $this->larghezza = $base;
        $this->altezza = $altezza;
    }

    function calcolaArea(): float {
        return ($this->larghezza * $this->altezza)/2;
    }

    function calcolaPerimetro(): float {
        return ($this->larghezza *3);
    }
    function toString(): string
    {
        $string = '<br>Triangolo Base : ';
        $string .= $this->larghezza;
        $string .= '<br>Triangolo altezza : ';
        $string .= $this->altezza;
        $string .= '<br>Area triangolo : ';
        $string .=  $this->calcolaArea();
        $string .=  '<br>Perimetro : ';
        $string .=  $this->calcolaPerimetro();
        $string .=  '<br>';
        return $string;
    }
}