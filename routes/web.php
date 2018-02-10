<?php
/*Routing*/

use App\Controllers\ExampleController;
use App\Models\Example;


/*Index Route*/
$app->get('/', function($request, $response){
  // CSRF token name and value
  $nameKey = $this->csrf->getTokenNameKey();
  $valueKey = $this->csrf->getTokenValueKey();
  $name = $request->getAttribute($nameKey);
  $value = $request->getAttribute($valueKey);

  return $this->view->render($response,'index.twig',[
    'nameKey'   => $nameKey,
    'valueKey'  => $valueKey,
    'name'      => $name,
    'value'     => $value,
  ]);
});

/*Accessing Example Controller*/
$app->get('/example', ExampleController::class.':index');

$app->post('/update', function(){
  return 'Subscribtion Updated.';
})->setName('update');
