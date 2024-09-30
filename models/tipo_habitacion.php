<?php

namespace Models;

class tipo_habitacion extends ActivarModelo
{
    protected static $tabla = 'tipos_habitacion';
    protected static $columnDB = ['id_tipo','nombre','descripcion'];

    public $nombre;
    public $descripcion;
    public function __construct($args = []){
        $this->nombre = $args['nombre'];
        $this->descripcion = $args['descripcion'];

    }

    public static function obtenerTodos() {
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::$db->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

}