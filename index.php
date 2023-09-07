<?php
require_once('Cerchio.php');
require_once('Quadrato.php');
require_once('Rettangolo.php');
require_once('Triangolo.php');
require_once('Parallelogramma.php');

$cerchio = new Cerchio(5);
echo $cerchio;

echo '<br>';
echo '<br>';

$radius = 10;
$cerchio = new Cerchio($radius);
$radius = 5;
$new_cerchio = new Cerchio($radius);
echo $cerchio;
echo '<br>';
echo $new_cerchio;

echo '<br>';
echo '<br>';

$quadrato = new Quadrato(5);
echo 'Questo è il mio quadrato fighissimo ' . $quadrato;
echo '<br>';
echo '<br>';

$rettangolo = new Rettangolo(4, 6);
echo 'Rettangolo ';
echo '<br>';
echo $rettangolo;
echo '<br>';
echo '<br>';

$triangolo = new Triangolo(9, 9);
echo $triangolo;
echo '<br>';
echo '<br>';

$parallelogramma = new Parallelogramma(7, 5);
echo 'Parallelogramma ';
echo '<br>';
echo $parallelogramma;
echo '<br>';



$new_cerchio = new Cerchio($radius);
echo $cerchio;