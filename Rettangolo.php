<?php
require_once('Poligono.php');

class Rettangolo extends Poligono {
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
    function toString(): string
    {
        $string = 'Rettangolo ';
        $string .= $this->larghezza.'x'.$this->altezza . "<br>";
        $string .= 'Area rettangolo ';
        $string .=  $this->calcolaArea();
        $string .=  '<br>Perimetro : ';
        $string .=  $this->calcolaPerimetro();
        $string .=  '<br>';
        return $string;
    }
}