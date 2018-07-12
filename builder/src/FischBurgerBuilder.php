<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 12/07/2018
 * Time: 14:07
 */

namespace Builder;

class FischBurgerBuilder extends SanduicheBuilder
{
    private $sanduiche;

    public function __construct()
    {
        $this->sanduiche = new FishBurger();
    }

    public function abrePao()
    {
        print "Abre pão de hamburguer.</br>";
    }

    public function insereIngredientes()
    {
        print "Insere file de peixe.</br>";
    }

    public function fechaPao()
    {
        print "Fecha pão de hamburguer.</br>";
    }

    public function getSanduiche(): Sanduiche
    {
        print "FishBurger está pronto!</br>";

        return $this->sanduiche;
    }
}