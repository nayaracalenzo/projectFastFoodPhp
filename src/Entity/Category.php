<?php

declare(strict_types=1);

namespace App\Entity;

class Category 
{
    public string $description;

    public string $image;

    public function __construct(private string $name) {

    }

}