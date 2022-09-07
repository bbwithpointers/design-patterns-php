<?php

use FactoryMethod\Product\CarroProduct;
use FactoryMethod\Product\Fusca;

class FuscaFactory implements CarroFactory 
{
    public function criarCarro(string $modeloDoCarro): CarroProduct
    {
        if ($modeloDoCarro == "fusca")
        {
            return new Fusca();
        } else {
            throw new Exception("Modelo de carro invalido!");
        }
    }
}