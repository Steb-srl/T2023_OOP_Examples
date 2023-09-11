<?php
require_once('Poligono.php');

class Triangolo extends Poligono {
    function __construct(float $base, float $altezza) {
        $this->larghezza = $base;
        $this->altezza = $altezza;
    }

    function calcolaArea(): float {
        return ($this->larghezza * $this->altezza) / 2;
    }

    function calcolaPerimetro(): float {
        return ($this->larghezza * 3);
    }

    function __toString(): string {
        return 'Triangolo<br>' . parent::__toString();
    }
}
