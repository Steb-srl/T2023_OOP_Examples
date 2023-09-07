<?php
require_once('FiguraGeometrica.php');

abstract class Poligono extends FiguraGeometrica {
    protected float $larghezza;
    protected float $altezza;

    public function getLarghezza(): float {
        return $this->larghezza;
    }

    public function getLunghezza(): float {
        return $this->larghezza;
    }
}
