<?php
namespace Bridge;

abstract class Professor
{
    private $implementador;

    public function __construct(Implementador $implementador)
    {
        $this->implementador = $implementador;
    }

    abstract public function op();
}