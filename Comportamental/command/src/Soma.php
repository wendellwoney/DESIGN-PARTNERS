<?php
/**
 * Created by PhpStorm.
 * Invoker: wende
 * Date: 25/07/2018
 * Time: 07:22
 */

namespace Command;


class Soma extends Command
{
    private $calc;
    private $numero;

    public function __construct(Calculadora $calc, int $numero)
    {
        $this->calc = $calc;
        $this->numero = $numero;
    }

    public function execute()
    {
        $this->calc->setValor($this->calc->getValor() + $this->numero);
        print $this->calc->getValor() . "<br>";
    }

    public function undo()
    {
        $this->calc->setValor($this->calc->getValor() - $this->numero);
        print "---->" . $this->calc->getValor() . "<br>";
    }
}