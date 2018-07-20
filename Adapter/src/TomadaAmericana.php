<?php
namespace Adapter;

class TomadaAmericana extends PlugAmericano
{
    public function conecta(PlugAmericano $plug)
    {
        return $plug->obtemEletricidade() . $this->getNomeRede();
    }

    public function getNomeRede()
    {
        return "tomada americana";
    }
}