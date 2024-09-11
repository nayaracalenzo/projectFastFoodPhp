<?php

class ContaBancaria
{
    public string $cliente;
    public string $conta;
    public string $agencia;
    private float $saldo = 0;

    public function __construct(
        private string $cliente,
        private string $agencia
    ) 

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function deposito(float $valor): void
    {
        $this->saldo += $valor;
    } 

    public function retirada(float $valor): void
    {
        if ($valor > $this->saldo) {
            throw new Exception('Saldo insuficiente');
        }

        $this->saldo -= $valor;
    }
}

$nubank = new ContaBancaria();
$nubank->cliente = 'Jaime';
$nubank->agencia = '0001';
$nubank->deposito(1.90);

echo "Saldo atual: {$nubank->getSaldo()}".PHP_EOL;

$nubank->deposito(998.99);

echo "Saldo atual: {$nubank->getSaldo()}".PHP_EOL;

$nubank->retirada(5056); 

echo "Saldo atual: {$nubank->getSaldo()}".PHP_EOL;

