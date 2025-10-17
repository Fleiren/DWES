<?php
include_once "proyecto_irene/env.php";
include_once "vendor/autoload.php";



use App\Controller\UserController;
use Phroute\Phroute\RouteCollector;
use App\Controller\MovieController;
use App\Controller\DirectorController;
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
$router -> put('/user/{id}',[UserController::class,'update']);
$router -> delete('/user/{id}',[UserController::class,'destroy']);

$router -> post('/user/create', [UserController::class,'create']);
$router -> post('/user/{id}/edit', [UserController::class,'edit']);

//Rutas de movie
$router->get('/movie',[MovieController::class, 'index']);
$router -> get('/movie/{id}', [MovieController::class,'show']);
$router -> post('/movie', [MovieController::class,'store']);
$router -> put('/movie/{id}',[MovieController::class,'update']);
$router -> delete('/movie/{id}',[MovieController::class,'destroy']);

$router -> post('/create-movie', [MovieController::class,'create']);
$router -> post('/movie/{id}/edit', [MovieController::class,'edit']);

//Rutas de director
$router -> get('/director', [DirectorController::class, 'index']);
$router -> get('/director/{id}', [DirectorController::class,'show']);
$router -> post('/director', [DirectorController::class,'store']);
$router -> put('/director/{id}',[DirectorController::class,'update']);
$router -> delete('/director/{id}', [DirectorController::class,'destroy']);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->
        dispatch($_SERVER['REQUEST_METHOD'],
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    include_once 'views/404.php';
}

echo $response;