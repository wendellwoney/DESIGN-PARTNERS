<?php
namespace FactoryMethod;

//FABRICA ABSTRATA EMPRESA
abstract class Empresa
{
    abstract public function emitePassagem(string $origem, string $destino, string $dataHorapartida);
}