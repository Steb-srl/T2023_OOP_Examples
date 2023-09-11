<?php
require_once('Rettangolo.php');

class Quadrato extends Rettangolo {
    function __construct(float $lato) {
        parent::__construct($lato, $lato);
    }

    function __toString(): string {
        return 'Quadrato<br>' . parent::__toString();
    }
}
