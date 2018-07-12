<?php
require __DIR__ . '/../vendor/autoload.php';

use Singleton\Janela;

$janela = Janela::getInstance();

print "<pre>";
var_dump($janela);

//Retorna a mesma instancia criada em janela
$janela2 = Janela::getInstance();
var_dump($janela);