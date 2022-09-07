<?php

namespace FactoryMethod\Product;

// Todos os subprodutos de um carro, precisam implementar os métodos desta interface
interface CarroProduct
{
    public function acelerar(): void;
    public function frear(): void;
    public function trocarMarcha(): void;
}

class TeslaModel implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Tesla acelerando\n";
    }

    public function frear(): void
    {
        echo "Tesla freando\n";
    }

    public function trocarMarcha(): void
    {
        echo "Tesla trocando marcha";
    }
}

// Concrete product, ou seja, um objeto concreto que implementa a interface
class Fusca implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Fusca acelerando\n";
    }

    public function frear(): void
    {
        echo "Fusca freando\n";
    }

    public function trocarMarcha(): void
    {
        echo "Fusca trocando marcha";
    }
}