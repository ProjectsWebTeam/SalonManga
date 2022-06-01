<?php

namespace Controllers;

use MVC\Router;

class PaginaController
{
    public static function index(Router $router)
    {
        $router->render("paginas/index", [
            
        ]);
    }

    public static function categorias(Router $router)
    {
        $router->render("paginas/categorias", [
            
        ]);
    }

    public static function ultimos(Router $router)
    {
        $router->render("paginas/ultimos", [
            
        ]);
    }

    public static function favoritos(Router $router)
    {
        $router->render("paginas/favoritos", [
            
        ]);
    }

    public static function perfil(Router $router)
    {
        $router->render("paginas/perfil", [
            
        ]);
    }

    public static function listcap(Router $router)
    {
        $router->render("paginas/listcap", [
            
        ]);
    }
}
