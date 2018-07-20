<?php
namespace Bridge;

class ProfessorPosGraduacao extends Professor
{
    private $implementador;

    public function __construct(Implementador $implementador)
    {
        $this->implementador = $implementador;
        parent::__construct($implementador);
    }

    public function op()
    {
        $this->implementador->opImpl();
    }
}