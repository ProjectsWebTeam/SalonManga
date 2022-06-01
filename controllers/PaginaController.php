<?php

namespace Controllers;

use Model\Mangas;
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

    public static function categoria(Router $router)
    {
        $router->render("paginas/categoria", [
            
        ]);
    }

    public static function ultimos(Router $router)
    {

        $mangas = Mangas::all();

        $router->render("paginas/ultimos", [
            'mangas' => $mangas
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
