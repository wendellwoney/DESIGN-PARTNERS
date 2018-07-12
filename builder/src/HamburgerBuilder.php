<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 12/07/2018
 * Time: 14:07
 */

namespace Builder;

class HamburgerBuilder extends SanduicheBuilder
{
    private $sanduiche;

    public function __construct()
    {
        $this->sanduiche = new Hamburger();
    }

    public function abrePao()
    {
        print "Abre pão de hamburguer.</br>";
    }

    public function insereIngredientes()
    {
        print "Insere carne e queijo.</br>";
    }

    public function fechaPao()
    {
        print "Fecha pão de hamburguer.</br>";
    }

    public function getSanduiche():Sanduiche
    {
        print "Hamburguer está pronto!</br>";

        return $this->sanduiche;
    }
}