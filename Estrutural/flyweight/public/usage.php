<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Flyweight\FiguraFactory;

$figura = FiguraFactory::getFigura('linha')->desenha('preto');

$figura = FiguraFactory::getFigura('oval não preenchida')->desenha('preto');

$figura = FiguraFactory::getFigura('oval preenchida')->desenha('azul');