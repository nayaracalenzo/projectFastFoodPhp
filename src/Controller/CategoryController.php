<?php

declare(strict_types=1);

namespace App\Controller;


class CategoryController extends AbstractController implements ControllerInterface
{
    public function add(): void
    {
        echo "pagina de cadastro";
    }
    public function list(): void
    {
        $this->render();
    }
    public function edit(): void
    {
        echo "pagina de editar";
    }
    public function remove(): void
    {
        echo "excluir";
    }
   
}
