<?php


namespace Builder;

// Objeto complexo que define um foguete
class FogueteProduct
{


    protected float $tanqueCombustivel;
    protected string $modelo;
    protected int $numeroMotores;
    protected int $numeroLugares;

    /**
     * @return float
     */
    public function getTanqueCombustivel(): float
    {
        return $this->tanqueCombustivel;
    }

    /**
     * @param float $tanqueCombustivel
     */
    public function setTanqueCombustivel(float $tanqueCombustivel): FogueteProduct
    {
        $this->tanqueCombustivel = $tanqueCombustivel;
        return $this;
    }

    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     */
    public function setModelo(string $modelo): FogueteProduct
    {
        $this->modelo = $modelo;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroMotores(): int
    {
        return $this->numeroMotores;
    }

    /**
     * @param int $numeroMotores
     */
    public function setNumeroMotores(int $numeroMotores): FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroLugares(): int
    {
        return $this->numeroLugares;
    }

    /**
     * @param int $numeroLugares
     */
    public function setNumeroLugares(int $numeroLugares): FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }

    public function __toString(): string
    {
        $result = "Foguete model: {$this->getModelo()}\n";
        $result .= "Litros do tanque: {$this->getTanqueCombustivel()}\n";
        $result .= "Número de motores: {$this->getNumeroMotores()}\n";
        $result .= "Número de lugares: {$this->getNumeroLugares()}\n";
        return $result;
    }



}