<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Builder\Cozinha;
use Builder\HamburgerBuilder;
use Builder\FischBurgerBuilder;


$cozinha = new Cozinha();
$sanduicheBuiderHamburguer = new HamburgerBuilder();
$sanduicheBuilderFishBurguer = new FischBurgerBuilder();

$cozinha->fazSanduiche($sanduicheBuiderHamburguer);
$sanduicheBuiderHamburguer->getSanduiche();
print "<br><br>";
$cozinha->fazSanduiche($sanduicheBuilderFishBurguer);
$sanduicheBuilderFishBurguer->getSanduiche();