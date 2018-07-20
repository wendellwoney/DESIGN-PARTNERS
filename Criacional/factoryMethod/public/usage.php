<?php
require_once __DIR__ . "/../vendor/autoload.php";

use FactoryMethod\EmpresaOnibusUrbano;
use FactoryMethod\EmpresaOnibusInterEstadual;

//Empresas de ônibus
$empresaUrbana = new EmpresaOnibusUrbano();
$empresaInterEstadual = new EmpresaOnibusInterEstadual();

//Emite as passagens
$passagemUrbana = $empresaUrbana->emitePassagem(
    "Luzia",
    "Centro",
    date("d/m/Y h:i:s")
);

$passagemInterEstadual = $empresaInterEstadual->emitePassagem(
    "Aracaju",
    "Larangeiras",
    date("d/m/Y h:i:s")
);

//Exibe Detalhes da passagem
print $passagemUrbana->exibeDetalhes();
print "<br><br>";
print $passagemInterEstadual->exibeDetalhes();