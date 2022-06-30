<?php

namespace Controllers;

use Model\Categorias;
use Model\Mangas;
use MVC\Router;

class PaginaController
{
    public static function index(Router $router)
    {
        $router->render("paginas/index", []);
    }

    public static function categorias(Router $router)
    {
        $categorias = Categorias::all();

        $router->render("paginas/categorias", [
            'categorias' => $categorias
        ]);
    }

    public static function categoria(Router $router)
    {
        $param = $_GET['idCat'];
        $titulo = "";
        $mangas = null;

        if ($param != null && $param === "0") {
            $titulo = "Destacados";

            $mangas = Mangas::where("destacado", "1");
        } else if ($param != null && $param != "0") {
            $cat = Categorias::where("idCategoria",$param);
            $titulo = $cat->nombre;

            $mangas = Mangas::where("idCategoria",$param);
        } else {
            header('Location: /categorias');
        }

        $router->render("paginas/categoria", [
            'titulo' => $titulo,
            'mangas' => $mangas
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
        $router->render("paginas/favoritos", []);
    }

    public static function perfil(Router $router)
    {
        $router->render("paginas/perfil", []);
    }

    public static function listcap(Router $router)
    {
        $router->render("paginas/listcap", []);
    }
}
