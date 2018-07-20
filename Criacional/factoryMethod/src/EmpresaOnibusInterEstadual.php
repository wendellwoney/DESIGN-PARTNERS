<?php
namespace FactoryMethod;

//FABRICA CONCRETA
class EmpresaOnibusInterEstadual extends Empresa
{
    public function emitePassagem(string $origem, string $destino, string $dataHorapartida)
    {
        return new PassagemOnibusInterestadual($origem, $destino, $dataHorapartida);
    }
}