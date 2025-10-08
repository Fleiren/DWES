<?php
require '../vendor/autoload.php';
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
$router = new RouteCollector();
$router->get('/', function (){
    include_once("views/home.php");
});

$router->get('/password', function (){
    include_once("views/password.php");
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->
    dispatch($_SERVER['REQUEST_METHOD'],
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    $response = "ERROR 404";
}

echo $response;
?>


<!--DESCARGAR EXAMPLES DE BOOTSTRAP PARA FORMAR MI PÁGINA-->