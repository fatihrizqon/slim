<?php
/*Routing*/

use App\Controllers\ExampleController;
use App\Models\Example;

/*Index Route*/
$app->get('/', function($request, $response){
    return $this->view->render($response,'index.twig');
});

/*Example Route*/
$app->get('/example', ExampleController::class.':index');