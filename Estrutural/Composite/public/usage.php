<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once __DIR__ . "/../vendor/autoload.php";

use Composite\Developer;
use Composite\Manager;

//Objetos folhas
$pEstagiario = new Developer(1, "José", 1900);
$pJunior = new Developer(2, "Pedro", 2900);
$pSenior = new Developer(3, "Ricardo", 3900);

// gerentes
$g1 = new Manager(3, "João", 15000);
$g2 = new Manager(2, "Maria", 15000);
$g3 = new Manager(1, "Carlos", 15000);

//Montar a estrutura em arvore

//carlos supervisiona os progamadores Jose e pedro;
$g1->add($pEstagiario);
$g1->add($pJunior);

//Maria supervisiona ricardo
$g2->add($pSenior);

//Joao supervisiona todos ou seja é a raiz da árvore
$g3->add($g1);
$g3->add($g2);

$g3->printer();