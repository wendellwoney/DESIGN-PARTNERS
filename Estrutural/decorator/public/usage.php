<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Decorator\ArvoreNatal;
use Decorator\Bola;
use Decorator\PiscaPisca;
use Decorator\Estrela;

$arvorenatal = new ArvoreNatal();
$arvorenatal = new Estrela($arvorenatal);
$arvorenatal = new Bola($arvorenatal);
$arvorenatal = new Bola($arvorenatal);
$arvorenatal = new Bola($arvorenatal);
$arvorenatal = new Bola($arvorenatal);
$arvorenatal = new Bola($arvorenatal);
$arvorenatal = new PiscaPisca($arvorenatal);

$arvorenatal->showEnfeite();