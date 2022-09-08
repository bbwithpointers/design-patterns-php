<?php

class FogueteModeloIIBuilder extends \Builder\FogueteBuilder
{

    // Repare que já possuimos acesso a um objeto do tipo foguete
    public function buildTanqueCombustivel(): void
    {
        $this->foguete->setTanqueCombustivel(850);
    }

    public function buildModelo(): void
    {
        $this->foguete->setModelo('Foguete tipo 2');
    }

    public function buildMotores(): void
    {
        $this->foguete->setNumeroMotores(54);
    }

    public function buildNumeroLugares(): void
    {
        $this->foguete->setNumeroLugares(133);
    }
}