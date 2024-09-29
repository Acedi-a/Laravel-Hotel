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

}