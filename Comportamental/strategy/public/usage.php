<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Strategy\Vetor;
use Strategy\BubbleSort;
use Strategy\QuickSort;
use Strategy\MergeSort;

$vetor = new Vetor(new QuickSort());
$vetor->ordenar();
print "<br>";
$vetor->setAlgoritimo(new BubbleSort());
$vetor->ordenar();
print "<br>";
$vetor->setAlgoritimo(new MergeSort());
$vetor->ordenar();
print "<br>";
