<?php

namespace Flyweight;


class Linha extends Figura
{
    public function desenha(string $cor)
    {
        print "Desenhando linha " . $cor . " <br>";
    }
}