<?php
require_once('FiguraGeometrica.php');

abstract class Poligono extends FiguraGeometrica {
    protected float $larghezza;
    protected float $altezza;


    public function getLarghezza(): float {
        return $this->larghezza;
    }

    public function getLunghezza(): float {
        return $this->altezza;
    }

    public function __toString(): string {
        $string = "Base : " . $this->larghezza . "<br> Altezza : " . $this->altezza;
        $string .= "<br>Area : " . $this->calcolaArea() . "<br>Perimetro : " . $this->calcolaPerimetro();
        return $string;
    }
}
