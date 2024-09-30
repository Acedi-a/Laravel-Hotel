<?php

namespace Models;

class habitaciones extends tipo_habitacion
{
    protected static $tabla = 'habitaciones';
    protected static $columnDB = ['id_habitacion','numero','id_tipo','capacidad','precio_por_noche','wifi','bano','tv','estado','foto'];

    public $numero;
    public $id_tipo;
    public $capacidad;
    public $precio_por_noche;
    public $wifi;
    public $bano;
    public $tv;
    public $estado;
    public $foto;

    public function __construct($args = []){
        $this->numero = $args['numero']??null;
        $this->id_tipo = $args['id_tipo']??null;
        $this->capacidad = $args['capacidad']??null;
        $this->precio_por_noche = $args['precio_por_noche']??null;
        $this->wifi = $args['wifi']??null;
        $this->bano = $args['bano']??null;
        $this->tv = $args['tv']??null;
        $this->estado = $args['estado']??null;
        $this->foto = $args['foto']??null;
    }
    public function setImagen($imagen){
        $this->foto=$imagen;
    }
    public static function obtenerHabitacion($id) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id_habitacion = " . self::$db->escape_string($id);
        //var_dump($query);
        $resultado = self::$db->query($query);
        if ($resultado && $resultado->num_rows > 0) {
            return $resultado->fetch_object(static::class);
        }
        return null;
    }


    public function actualizar() {
        $atributos = $this->pasar();
        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla ." SET ";
        $query .= join(', ', $valores );
        $query .= " WHERE id_habitacion = '" . self::$db->escape_string($this->id_habitacion) . "' ";
        $resultado = self::$db->query($query);
        return $resultado;
    }
}