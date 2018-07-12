<?php
namespace FactoryMethod;

//PRODUTO CONCRETO
class PassagemOnibusInterestadual extends Passagem
{
    public function __construct(string $origem, string $destino, string $dataHorapartida)
    {
        parent::__construct($origem, $destino, $dataHorapartida);
    }

    public function exibeDetalhes()
    {

        $detalhe = "Passagem de ônibus interestadual</br>";
        $detalhe .= "ORIGEM: " . $this->getOrigem() . "</br>";
        $detalhe .= "DESTINO: " . $this->getDestino() . "</br>";
        $detalhe .= "Data/Hora " . $this->getDataHorapartida() . "</br>";

        return $detalhe;
    }
}