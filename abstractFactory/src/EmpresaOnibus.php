<?php
namespace AbstractFactory;

class EmpresaOnibus extends Empresa
{
    public function emitePassagemInterEstadual(string $origem, string $destino, string $dataHorapartida)
    {
        return new ConcretePassagemOnibusInterEstadual($origem, $destino, $dataHorapartida);
    }

    public function emitePassagemUrbano(string $origem, string $destino, string $dataHorapartida)
    {
        return new ConcretePassagemOnibusUrbano($origem, $destino, $dataHorapartida);
    }
}