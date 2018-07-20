<?php
namespace FactoryMethod;

//FABRICA CONCRETA
class EmpresaOnibusUrbano extends Empresa
{
    public function emitePassagem(string $origem, string $destino, string $dataHorapartida)
    {
        return new PassagemOnibusUrbano($origem, $destino, $dataHorapartida);
    }
}