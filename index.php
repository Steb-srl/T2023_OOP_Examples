<?php
require_once('Cerchio.php');
require_once('Quadrato.php');
require_once('Rettangolo.php');
require_once('Triangolo.php');

$cerchio = new Cerchio(5);
echo 'Cerchio raggio: ';
echo $cerchio->getRaggio();
echo '<br>Area : ';
echo $cerchio->calcolaArea();
echo '<br>Circonferenza : ';
echo $cerchio->calcolaPerimetro();
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';

$radius = 10;
$cerchio = new Cerchio($radius);
$radius = 5;
$new_cerchio = new Cerchio($radius);
echo $cerchio->toString();
echo '<br>';
echo $new_cerchio->toString();

echo '<br>';
echo '<br>';
echo '<br>';

$quadrato = new Quadrato(5);
echo 'Qadrato ';
echo $quadrato->getLarghezza();
echo 'x';
echo $quadrato->getLunghezza();
echo '<br>Area : ';
echo $quadrato->calcolaArea();
echo '<br>Circonferenza : ';
echo $quadrato->calcolaPerimetro();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$rettangolo = new Rettangolo(4, 6);
echo $rettangolo->toString();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$triangolo = new Triangolo(9, 9);
echo $triangolo->toString();