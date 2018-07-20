<?php
namespace Decorator;


abstract class Decoracao extends Arvore
{
    private $arvore;

    public function __construct(Arvore $arvore)
    {
        $this->arvore = $arvore;
    }

    public function showEnfeite()
    {
        $this->arvore->showEnfeite();
    }
}