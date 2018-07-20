<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Adapter\AdapdatorEuaBrasil;
use Adapter\PlugAmericano;
use Adapter\AdapdatorBrasilEua;
use Adapter\PlugBrasileiro;
use Adapter\TomadaBrasileira;

//Erro na clamada
//$tomadaBrasileira = new TomadaBrasileira();
//echo $tomadaBrasileira->conecta(new PlugAmericano());


$adaptadorEauBrasil = new AdapdatorEuaBrasil();
print $adaptadorEauBrasil->conecta(new PlugAmericano());

print "<br><br>";

$adaptadorBrasilEua = new AdapdatorBrasilEua();
print $adaptadorBrasilEua->conecta(new PlugBrasileiro());