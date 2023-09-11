<?php
abstract class FiguraGeometrica {
    abstract protected function calcolaArea(): float;

    abstract protected function calcolaPerimetro(): float;

    abstract public function __toString(): string;
}
