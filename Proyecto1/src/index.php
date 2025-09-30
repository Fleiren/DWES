<?php
include_once "vendor/autoload.php";
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

$router = new RouteCollector();

$router->get('/', function(){
    return "Estoy en la página de principal";
});

$router->get('admin/', function(){
    include_once "src/indice.php";
});

$router->get('/pass', function(){
   include_once 'auxiliar/funciones.php';
   echo generatePassword(16);
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->
        dispatch($_SERVER['REQUEST_METHOD'],
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    include_once 'views/404.php';
}

echo $response;