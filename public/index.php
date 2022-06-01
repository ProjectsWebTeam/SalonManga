<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\PaginaController;
use MVC\Router;

$router = new Router();
 
//Area Publica
$router->get('/', [PaginaController::class, 'index']);
$router->get('/categorias', [PaginaController::class, 'categorias']);
$router->get('/categoria', [PaginaController::class, 'categoria']);
$router->get('/ultimos', [PaginaController::class, 'ultimos']);
$router->get('/favoritos', [PaginaController::class, 'favoritos']);
$router->post('/favoritos', [PaginaController::class, 'favoritos']);
$router->get('/perfil', [PaginaController::class, 'perfil']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();