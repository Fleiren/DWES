<?php
include_once "proyecto_irene/env.php";
include_once "vendor/autoload.php";


use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

$router = new RouteCollector();

$router->get('/', function (){
    include_once("proyecto_irene/views/home.php");
});

$router->get('/password/create', function (){
    include_once("proyecto_irene/views/password.php");
});

$router->post('/password', function (){
    include_once("proyecto_irene/views/mostrar-password.php");
});












$router->get('/1', function(){
    return "Estoy en la página de principal";
});

$router->get('/admin', function(){
    include_once "views/indice.php";
});

$router->get('/pass', function(){
    echo "Se va a generar una contraseña</br>";
    var_dump($_GET);
   include_once 'auxiliar/funciones.php';
   if(isset($_GET['num1'])){
       echo generatePassword($_GET['num1']);
   }else{
       echo "Tienes que pasarme un parámetro llamado num1</br>";
   }

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