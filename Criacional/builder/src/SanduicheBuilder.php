<?php
namespace Builder;

abstract class SanduicheBuilder
{
    abstract public function abrePao();
    abstract public function insereIngredientes();
    abstract public function fechaPao();
    abstract public function getSanduiche():Sanduiche;
}