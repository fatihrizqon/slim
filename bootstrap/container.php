<?php
/* Get container */
$container = $app->getContainer();

/* Register CSRF Protection with container */
$container['csrf'] = function ($c) {
    return new \Slim\Csrf\Guard;
};
$app->add($container->get('csrf'));

/* Register View Component to the Container */
$container['view'] = function ($container){
    $view = new \Slim\Views\Twig('../resources/views', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    $view->addExtension(new App\Views\CsrfExtension($container['csrf']));
    return $view;
};

/* Register Database to the Container */
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule){
    return $capsule;
};
