<?php
require_once('Cerchio.php');
require_once('Quadrato.php');
require_once('Rettangolo.php');
require_once('Triangolo.php');

$cerchio = new Cerchio(5);
echo 'Cerchio ';
echo '<br>';
echo $cerchio->toString();

echo '<br>';
echo '<br>';

$radius = 10;
$cerchio = new Cerchio($radius);
$radius = 5;
$new_cerchio = new Cerchio($radius);
echo 'Cerchio ';
echo '<br>';
echo $cerchio->toString();
echo '<br>';
echo 'Cerchio ';
echo '<br>';
echo $new_cerchio->toString();

echo '<br>';
echo '<br>';

$quadrato = new Quadrato(5);
echo 'Quadrato ';
echo '<br>';
echo $quadrato->toString();
echo '<br>';
echo '<br>';

$rettangolo = new Rettangolo(4, 6);
echo 'Rettangolo ';
echo '<br>';
echo $rettangolo->toString();
echo '<br>';
echo '<br>';

$triangolo = new Triangolo(9, 9);
echo 'Triangolo';
echo '<br>';
echo $triangolo->toString();