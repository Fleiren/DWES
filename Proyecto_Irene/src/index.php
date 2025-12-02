<?php
#Importamos env.php para las rutas, cargamos las variables de entorno.
include_once "env.php";
#Es creado por composer y sirve para poder usar todas las clases de todas las librerías instaladas sin necesidad de escribir un require o include para cada archivo que vayas a utilizar.
include_once "vendor/autoload.php";
#Iniciamos sesión.
session_start();
#Importamos las clases que vamos necesitando:
#Clases para el ruteo:
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
#Importamos controladores:
use App\Controllers\BookController;

#Declaramos la variable $routes para crear rutas:
$router = new RouteCollector();
#A partir de aquí declaramos las rutas:

$router->get('/books', [BookController::class, 'index']);
$router->get('/admin', [BookController::class, 'admin']);
$router->get('/admin/book/create', [BookController::class, 'create']);
$router->post('/admin/book/create', [BookController::class, 'store']);

#Aquí en el final declaramos el dispatcher para que se muestre el resultado de las rutas:

$dispatcher = new Dispatcher($router->getData());
#Obtiene la URL actual del metodo (GET,POST, etc.)
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
#Imprimir el resultado que devuelve el controlador.
echo $response;
