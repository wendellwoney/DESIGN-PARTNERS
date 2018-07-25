<?php
/**
 * Created by PhpStorm.
 * Invoker: wende
 * Date: 25/07/2018
 * Time: 07:22
 */

namespace Command;


class Calculadora
{
    private $valor;

    public function getValor() : int
    {
        return (int) $this->valor;
    }

    public function setValor(int $valor)
    {
        $this->valor = $valor;
    }
}