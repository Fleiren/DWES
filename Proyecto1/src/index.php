<?php
include_once "proyecto_irene/env.php";
include_once "vendor/autoload.php";



use App\Controller\UserController;
use Phroute\Phroute\RouteCollector;
use App\Controller\MovieController;
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

  //Rutas de Usuario
//Rutas de servicio API REST

$router->get('/user',[UserController::class, 'index']);
$router -> get('/user/{id}',[UserController::class,'show']);
$router -> post('/user', [UserController::class,'store']);
$router -> put('/user',[UserController::class,'update']);
$router -> delete('/user',[UserController::class,'destroy']);

$router -> post('/user/create', [UserController::class,'create']);
$router -> post('/user/{id}/edit', [UserController::class,'edit']);

$router->get('/movie',[MovieController::class, 'index']);
$router -> get('/movie/{id}', [MovieController::class,'show']);
$router -> post('/movie', [MovieController::class,'store']);
$router -> put('/movie',[MovieController::class,'update']);
$router -> delete('/movie',[MovieController::class,'destroy']);

$router -> post('/movie/create', [MovieController::class,'create']);
$router -> post('/movie/{id}/edit', [MovieController::class,'edit']);


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->
        dispatch($_SERVER['REQUEST_METHOD'],
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    include_once 'views/404.php';
}

echo $response;