<?php
namespace Decorator;


class Estrela extends Decoracao
{
    public function __construct(Arvore $arvore)
    {
        parent::__construct($arvore);
    }

    public function showEnfeite()
    {
        parent::showEnfeite();
        print "Estrela, <br>";
    }
}