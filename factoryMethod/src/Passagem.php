<?php

namespace FactoryMethod;

//Produto
abstract class Passagem
{
    private $origem;
    private $destino;
    private $dataHorapartida;

    public function __construct(string $origem, string $destino, string $dataHorapartida)
    {
        $this->origem          = $origem;
        $this->destino         = $destino;
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

    abstract public function exibeDetalhes();
}