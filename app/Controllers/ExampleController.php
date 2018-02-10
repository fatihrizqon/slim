<?php
namespace App\Controllers;
use Interop\Container\ContainerInterface;
use App\Models\Example;

class ExampleController extends BaseController{
    public function index($request, $response){
      $this->container->view->render($response,'home/home.twig');
    }
}
