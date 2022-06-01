<?php

namespace Model;

class Mangas extends ActiveRecord{
    protected static $tabla = 'mangas';
    protected static $columnasDB = ['idManga','nombre','autor','imagen','descripcionCorta','descripcionLarga','estado'];

    public $idManga;
    public $nombre;
    public $autor;
    public $imagen;
    public $descripcionCorta;
    public $descripcionLarga;
    public $estado;

    public function __construct($args = [])
    {
        $this->idManga = $args["idManga"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->autor = $args["autor"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->descripcionCorta = $args["descripcionCorta"] ?? "";
        $this->descripcionLarga = $args["descripcionLarga"] ?? "";
        $this->estado = $args["estado"] ?? "";
    }

    
}