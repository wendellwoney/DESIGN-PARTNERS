<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Command\Invoker;
use Command\Calculadora;
use Command\Soma;

$calc = new Calculadora();
$invoker = new Invoker();

$invoker->computer(new Soma($calc, 10));
$invoker->computer(new Soma($calc, 5));
$invoker->computer(new Soma($calc, 10));

$invoker->undo(2);