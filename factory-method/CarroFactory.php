<?php

use FactoryMethod\Product\CarroProduct;

// A carro factory, permite que a gente crie qualquer objeto concreto que implemente a interface CarroProduct
interface CarroFactory 
{
    public function criarCarro(string $modeloDoCarro) : CarroProduct;
}