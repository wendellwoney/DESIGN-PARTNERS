<?php
namespace Adapter;

class AdapdatorBrasilEua extends TomadaAmericana
{
    public function conecta(PlugBrasileiro $plug)
    {
        return $plug->obtemEletricidade() . $this->getNomeRede();
    }
}