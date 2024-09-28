<?php

namespace Models;

class cliente extends ActivarModelo
{
    protected static $tabla = 'usuarios';
    protected static $columnDB = ['id_cliente','nombres','apellidos','email','telefono','password','id_tipo_cliente'];

    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $password;
    public $tipo_cliente;

    public function __construct($args = []){
        $this->nombre = $args['nombre']??null;
        $this->apellido = $args['apellido']??null;
        $this->email = $args['email']??null;
        $this->telefono = $args['telefono']??null;
        $this->password = $args['password']??null;
        $this->tipo_cliente = $args['tipo_cliente']??null;
    }

}