<?php

namespace Model;

class Mangas extends ActiveRecord{
    protected static $tabla = 'mangas';
    protected static $columnasDB = ['idManga','nombre','autor','imagen','descripcion'];

    public $idManga;
    public $nombre;
    public $autor;
    public $imagen;
    public $descripcion;

    public function __construct($args = [])
    {
        $this->idManga = $args["idManga"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->autor = $args["autor"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->descripcion = $args["descripcion"] ?? "";
    }

    
}