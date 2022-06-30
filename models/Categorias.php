<?php 
namespace Model;

class Categorias extends ActiveRecord {
    protected static $tabla = 'categorias';
    protected static $columnasDB = ['idCategoria','nombre','imagen'];

    public $idCategoria;
    public $nombre;
    public $imagen;

    public function __construct($args = [])
    {
        $this->idCategoria = $args['idCategoria'] ?? null;
        $this->nombre = $args['nombre'] ?? "";
        $this->imagen = $args['imagen'] ?? "";
    }

    
}