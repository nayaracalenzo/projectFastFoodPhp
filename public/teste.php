<?php

include '../src/Controller/ControllerInterface.php';

use App\Controller\ControllerInterface;


class OrderController implements ControllerInterface
{
    public function add(): void
    {
        echo "pagina de cadastrar";
    }

    public function list(): void
    {

    }

    public function edit(): void
    {

    }

    public function remove(): void
    {

    }
}

$c = new OrderController();
$c->add();