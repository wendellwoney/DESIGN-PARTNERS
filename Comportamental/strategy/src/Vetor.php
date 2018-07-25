<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 25/07/2018
 * Time: 08:22
 */

namespace Strategy;


class Vetor
{
    private $algoritimo;

    public function __construct(AlgoritimoOrdenacao $algoritimo)
    {
        $this->algoritimo = $algoritimo;
    }

    public function setAlgoritimo(AlgoritimoOrdenacao $algoritimo)
    {
        $this->algoritimo = $algoritimo;
    }

    public function ordenar()
    {
        $this->algoritimo->sort();
    }
}