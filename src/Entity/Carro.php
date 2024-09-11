<?php

class Carro
{
    private string $placa;

    public function __construct(
        private string $marca,
        private string $modelo
    ) {

    }
}

$c = new Carro('Chevrolet', 'Celtinha');
$c->placa = 'ORT-5515';