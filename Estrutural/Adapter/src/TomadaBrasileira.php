<?php
namespace Adapter;

class TomadaBrasileira extends PlugBrasileiro
{
    public function conecta(PlugBrasileiro $plug)
    {
        return $plug->obtemEletricidade() . $this->getNomeRede();
    }

    public function getNomeRede()
    {
        return "tomada brasileira";
    }
}