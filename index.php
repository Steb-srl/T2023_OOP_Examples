<?php
require_once('Cerchio.php');
require_once('Quadrato.php');

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
echo 'Cerchio raggio: ';
echo $cerchio->getRaggio();
echo '<br>Area : ';
echo $cerchio->calcolaArea();
echo '<br>Circonferenza : ';
echo $cerchio->calcolaPerimetro();
echo '<br>';
echo '<br>';
echo 'Cerchio raggio: ';
echo $new_cerchio->getRaggio();
echo '<br>Area : ';
echo $new_cerchio->calcolaArea();
echo '<br>Circonferenza : ';
echo $new_cerchio->calcolaPerimetro();
echo '<br>';

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
