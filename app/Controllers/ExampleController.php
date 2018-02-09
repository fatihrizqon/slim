<?php
namespace App\Controllers;
use Interop\Container\ContainerInterface;
use App\Models\Example;

class ExampleController extends BaseController{
    public function index(){
        echo 'This is Example Controller';
    }
}