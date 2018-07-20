<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 20/07/2018
 * Time: 13:03
 */

namespace Adapter;


abstract class Tomada
{
    abstract function conecta(Plug $plug);
    abstract function getNomeRede();
}