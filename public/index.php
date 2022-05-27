<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\PaginasController;
use MVC\Router;

$router = new Router();

//Area Publica
$router->get('/', [PaginasController::class, 'index']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();