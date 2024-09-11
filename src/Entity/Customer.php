<?php

declare(strict_types=1);

namespace App\Entity;

class Customer
{
    private string $name;
    
    private Address $address;

    private string $email;

    private string $phone;

    private string $photo;

    private bool $status;

    public function __construct(string $name, string $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }
}


include 'Address.php';

$jp = new Customer('Joao Pedro', '85 9 1234-1234');
// $jp->setName('Joao Pedro');

$end = new Address();
$end->setStreet('Av Santos Dummont');

$jp->setAddress($end);

echo "=============================".PHP_EOL;
echo "== Nome: {$jp->getName()}".PHP_EOL;
echo "== Logradouro: {$jp->getAddress()->getStreet()}".PHP_EOL;
echo "=============================".PHP_EOL;



// $fulano = new Customer();

// $pedido = new Order();
// $pedido->setCustomer($fulano);




// <input id="name">

