<?php
namespace AbstractFactory;

//PRODUTOS ABSTRATOS
abstract class PassagemOnibusUrbano
{
    private $origem;
    private $destino;
    private $dataHorapartida;

    public function __construct($origem, $destino, $dataHorapartida)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->dataHorapartida = $dataHorapartida;
    }

    public function getOrigem()
    {
        return $this->origem;
    }

    public function setOrigem($origem)
    {
        $this->origem = $origem;
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function getDataHorapartida()
    {
        return $this->dataHorapartida;
    }

    public function setDataHorapartida($dataHorapartida)
    {
        $this->dataHorapartida = $dataHorapartida;
    }

    abstract public function exibeDetalhe();
}