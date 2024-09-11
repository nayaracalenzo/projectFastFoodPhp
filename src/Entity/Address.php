<?php

declare(strict_types=1);

namespace App\Entity;

class Address 
{
    private string $street;
    
    public string $number;

    public string $zipcode;

    public string $district;

    public string $city;

    public string $state;

    public function full(): string
    {
        return "{$this->street}, {$this->number} - {$this->district}, {$this->city}-{$this->state}";
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }
}

$enderecoAntigo = new Address(); //instancia
$enderecoAntigo->setStreet('Rua Irlanda');
$enderecoAntigo->setNumber('51');
$enderecoAntigo->setDistrict('Gererau');
$enderecoAntigo->setCity('Itaitinga');
$enderecoAntigo->setState('CE');

$endereco = new Address(); //instancia
$endereco->setStreet('Rua Barca Velha');
$endereco->setNumber('123');
$endereco->setDistrict('Quintino Cunha');
$endereco->setCity('Fortaleza');
$endereco->setState('CE');

echo "Antigo: {$enderecoAntigo->full()}".PHP_EOL;
echo "Novo: {$endereco->full()}".PHP_EOL;

