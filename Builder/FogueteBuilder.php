<?php

namespace Builder;

// esta é a interface que será extendida pelas outras classes
abstract class FogueteBuilder
{
    // sempre que uma classe implementar o Builder, teremos uma instancia de um foguete
    // pronto para uso
    protected FogueteProduct $foguete;

    public function __construct()
    {
        $this->foguete = new FogueteProduct();
    }

    public function getFoguete():FogueteProduct
    {
        return $this->foguete;
    }

    // métodos que serão implementados por outros foguetes, especificando seus atributos variados
    abstract public function buildTanqueCombustivel(): void;
    abstract public function buildModelo(): void;
    abstract public function buildMotores(): void;
    abstract public function buildNumeroLugares(): void;
}