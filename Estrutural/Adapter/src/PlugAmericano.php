<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 20/07/2018
 * Time: 13:12
 */

namespace Adapter;


class PlugAmericano extends Plug
{
    public function obtemEletricidade()
    {
        return "Plug americano conectado à ";
    }
}