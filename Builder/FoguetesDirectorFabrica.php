<?php

namespace Builder;
use Builder\FogueteProduct;

class FoguetesDirectorFabrica
{
    protected \Builder\FogueteBuilder $construtorDeFoguetes;

    public function __construct(\Builder\FogueteBuilder $construtorDeFoguetes) {
        $this->construtorDeFoguetes = construtorDeFoguetes;
    }

    public function getFoguete(): FogueteProduct
    {
        return $this->construtorDeFoguetes->getFoguete();
    }
    // método responsável por construir os foguetes com os métodos da FogueteBuilder
    public function construirFoguete(): void
    {
        $this->construtorDeFoguetes->buildModelo();
        $this->construtorDeFoguetes->buildMotores();
        $this->construtorDeFoguetes->buildTanqueCombustivel();
        $this->construtorDeFoguetes->buildNumeroLugares();
    }

}