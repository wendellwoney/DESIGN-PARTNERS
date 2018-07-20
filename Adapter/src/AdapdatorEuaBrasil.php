<?php
namespace Adapter;

class AdapdatorEuaBrasil extends TomadaBrasileira
{
    public function conecta(PlugAmericano $plug)
    {
        return $plug->obtemEletricidade() . $this->getNomeRede();
    }
}