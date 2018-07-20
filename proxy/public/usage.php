<?php

require_once  __DIR__ . "/../vendor/autoload.php";

use Proxy\ProxyImage;

$imagem1 = new ProxyImage("imagem_10MB_photo1");
$imagem2 = new ProxyImage("imagem_10MB_photo2");

$imagem1->displayImage();
print "<br>";
$imagem2->displayImage();
//Não carregou novamente a imagem apenas apontou
$imagem1->displayImage();