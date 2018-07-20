<?php
require_once __DIR__ . "/../vendor/autoload.php";
use AbstractFactory\EmpresaOnibus;

$empresaOnibus = new EmpresaOnibus();

$passagemUrbana = $empresaOnibus->emitePassagemUrbano(
    "Santa Lucia",
    "D.I.A",
    date("d/m/Y H:i:s")
);

$passagemInterEstadual = $empresaOnibus->emitePassagemInterEstadual(
    "Aracaju",
    "Nossa senhora das Dores",
    date("d/m/Y H:i:s")
);

print $passagemUrbana->exibeDetalhe();
print "<br><br>";
print $passagemInterEstadual->exibeDetalhe();