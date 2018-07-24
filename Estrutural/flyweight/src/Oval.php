<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 24/07/2018
 * Time: 18:34
 */

namespace Flyweight;


class Oval extends Figura
{
    private $preenchido;

    public function __construct(bool $preenchido)
    {
        $this->preenchido = $preenchido;
    }

    public function desenha(string $cor)
    {
        if ($this->preenchido)
            print "Desenhando circulo preenchido na cor " . $cor . " <br>";
        else
            print "Desenhando circulo na cor " . $cor . " <br>";
    }
}