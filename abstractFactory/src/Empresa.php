<?php
namespace AbstractFactory;

//FABRICA ABSTRATA EMPRESA
abstract class Empresa
{
    abstract public function emitePassagemInterEstadual(string $origem, string $destino, string $dataHorapartida);
    abstract public function emitePassagemUrbano(string $origem, string $destino, string $dataHorapartida);

}