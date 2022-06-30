<?php

namespace Model;

class Mangas extends ActiveRecord{
    protected static $tabla = 'mangas';
    protected static $columnasDB = ['idManga','nombre','idCategoria','autor','imagen','descripcionCorta','descripcionLarga','estado','destacado'];

    public $idManga;
    public $nombre;
    public $idCategoria;
    public $autor;
    public $imagen;
    public $descripcionCorta;
    public $descripcionLarga;
    public $estado;
    public $destacado;

    public function __construct($args = [])
    {
        $this->idManga = $args["idManga"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->idCategoria = $args["idCategoria"] ?? null;
        $this->autor = $args["autor"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->descripcionCorta = $args["descripcionCorta"] ?? "";
        $this->descripcionLarga = $args["descripcionLarga"] ?? "";
        $this->estado = $args["estado"] ?? "";
        $this->destacado = $args["destacado"] ?? 0;
    }

    public static function where($columna, $valor) {
        $query = "SELECT * FROM " . static::$tabla  ." WHERE ${columna} = '${valor}'";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }
}