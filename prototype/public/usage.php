<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Prototype\Partitura;

//Carregar diferentes tipos de notas musicais
Partitura::carregaNotas();

//Compor a canção
Partitura::getNota("do")->desenha();
Partitura::getNota("do")->desenha();
Partitura::getNota("re")->desenha();
Partitura::getNota("mi")->desenha();
Partitura::getNota("do")->desenha();
Partitura::getNota("mi")->desenha();