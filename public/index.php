<?php

include '../config/routes.php';
include '../src/Controller/AbstractController.php';
include '../src/Controller/ControllerInterface.php';
include '../src/Controller/CategoryController';


use App\Controller\ControllerInterface;
use App\Controller\AbstractController;
use App\Controller\CategoryController;

//$c=new CategoryController();
//$c->list();

(new CategoryController())->list();






//include '../views/_layouts/head.php';
//include '../views/_components/content.php';
//include '../views/_layouts/footer.php';


