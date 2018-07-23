<?php
namespace Facede;

class Facede
{
    private $subsistemaUm;
    private $subsistemaDois;
    private $subsistemaTres;

    public function __construct()
    {
        $this->subsistemaUm = new SubSistemaUm();
        $this->subsistemaDois = new SubSistemaDois();
        $this->subsistemaTres = new SubSistemaTres();
    }

    public function metodoA()
    {
        $this->subsistemaTres->metodoTres();
        $this->subsistemaUm->metodoUm();
    }

    public function metodoB()
    {
        $this->subsistemaUm->metodoUm();
        $this->subsistemaDois->metodoDois();
    }
}