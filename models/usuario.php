<?php

namespace Models;

class usuario extends ActivarModelo
{
    protected static $tabla = 'usuarios';
    protected static $columnDB = ['id_usuario','nombre','apellido','email','telefono','password','id_tipo_usuario'];

    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $password;
    public $id_tipo_usuario;

    public function __construct($args = []){
        $this->nombre = $args['nombre']??null;
        $this->apellido = $args['apellido']??null;
        $this->email = $args['email']??null;
        $this->telefono = $args['telefono']??null;
        $this->password = $args['password']??null;
        $this->id_tipo_usuario = $args['id_tipo_usuario']??null;
    }

}