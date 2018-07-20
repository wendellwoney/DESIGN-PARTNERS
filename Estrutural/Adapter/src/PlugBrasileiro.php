<?php
namespace Adapter;


class PlugBrasileiro extends Plug
{
    public function obtemEletricidade()
    {
        return "Plug brasileiro conectado à ";
    }
}