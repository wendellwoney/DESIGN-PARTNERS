<?php
/**
 * Created by PhpStorm.
 * User: wende
 * Date: 12/07/2018
 * Time: 13:48
 */

namespace AbstractFactory;


class ConcretePassagemOnibusInterEstadual extends PassagemOnibusInterestadual
{
    public function __construct($origem, $destino, $dataHorapartida)
    {
        parent::__construct($origem, $destino, $dataHorapartida);
    }

    public function exibeDetalhe()
    {
        $detalhe  = "Passagem de ônibus Inter-Estadual</br>";
        $detalhe .= "ORIGEM: " . $this->getOrigem() . "</br>";
        $detalhe .= "DESTINO: " . $this->getDestino() . "</br>";
        $detalhe .= "Data/Hora " . $this->getDataHorapartida() . "</br>";

        return $detalhe;
    }
}