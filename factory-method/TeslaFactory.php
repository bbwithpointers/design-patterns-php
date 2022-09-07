<?php

use FactoryMethod\Product\CarroProduct;
use FactoryMethod\Product\TeslaModel;

class TeslaFactory implements CarroFactory 
{
    public function criarCarro(string $modeloDoCarro): CarroProduct
    {
        if ($modeloDoCarro == "modeloX")
        {
            return new TeslaModel();
        } else {
            throw new Exception("Modelo de carro invalido!");
        }
    }
}