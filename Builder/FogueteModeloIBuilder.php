<?php

class FogueteModeloIBuilder extends \Builder\FogueteBuilder
{

    // Repare que já possuimos acesso a um objeto do tipo foguete
    public function buildTanqueCombustivel(): void
    {
        $this->foguete->setTanqueCombustivel(1313);
    }

    public function buildModelo(): void
    {
        $this->foguete->setModelo('Foguete tipo 1');
    }

    public function buildMotores(): void
    {
        $this->foguete->setNumeroMotores(4);
    }

    public function buildNumeroLugares(): void
    {
        $this->foguete->setNumeroLugares(13);
    }
}