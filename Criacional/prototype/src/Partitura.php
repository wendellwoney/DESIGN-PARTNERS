<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 12/07/2018
 * Time: 14:52
 */

namespace Prototype;


class Partitura
{
    private static $notaMap = array();

    public static function carregaNotas()
    {
        $do = new NotaDo();
        self::$notaMap['do'] = $do;

        $re = new NotaRe();
        self::$notaMap['re'] = $re;

        $mi = new NotaMi();
        self::$notaMap['mi'] = $mi;
    }

    public static function getNota(string $nome)
    {
        $nota = static::$notaMap[$nome];
        return clone $nota;
    }
}