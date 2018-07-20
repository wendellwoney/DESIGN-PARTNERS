<?php
namespace Decorator;


class Bola extends Decoracao
{
    private $arvore;

    public function __construct(Arvore $arvore)
    {
        parent::__construct($arvore);
    }

    public function showEnfeite()
    {
        parent::showEnfeite();
        print "Bola, <br>";
    }
}