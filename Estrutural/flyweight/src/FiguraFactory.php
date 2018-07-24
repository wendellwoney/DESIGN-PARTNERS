<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 24/07/2018
 * Time: 18:36
 */

namespace Flyweight;


class FiguraFactory
{
    private static $figuras = array();

    public static function getFigura($nome) : Figura
    {
        if ($nome == "oval preenchida") {
            static::$figuras[$nome] = new Oval(true);
        } elseif($nome == "oval não preenchida") {
            static::$figuras[$nome] = new Oval(false);
        } elseif($nome == "linha") {
            static::$figuras[$nome] = new Linha();
        }
        return static::$figuras[$nome];
    }


}