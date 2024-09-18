<?php

declare(strict_types=1);

namespace App\Entity;

class Address 
{
    private string $street;
    
    private string $number;

    private string $zipcode;

    private string $district;

    private string $city;

    private string $state;

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