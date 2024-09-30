<?php

namespace Models;

class reservas extends ActivarModelo
{
    protected static $tabla = 'reservas';
    protected static $columnDB = ['id_reserva','id_usuario','id_habitacion','fecha_entrada','fecha_salida','estado'];

    public $id_reserva; 
    public $id_usuario;
    public $id_habitacion;
    public $fecha_entrada;
    public $fecha_salida;
    public $estado; 

    public function __construct($args = []){
        $this->id_reserva = $args['id_reserva']??null;
        $this->id_usuario = $args['id_usuario']??null;
        $this->id_habitacion = $args['id_habitacion']??null;
        $this->fecha_entrada = $args['fecha_entrada']??null;
        $this->fecha_salida = $args['fecha_salida']??null;
        $this->estado = $args['estado']??null;
    }

}