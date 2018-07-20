<?php
namespace Decorator;


class PiscaPisca extends Decoracao
{
    public function __construct(Arvore $arvore)
    {
        parent::__construct($arvore);
    }

    public function showEnfeite()
    {
        parent::showEnfeite();
        print "PiscaPisca, <br>";
    }
}