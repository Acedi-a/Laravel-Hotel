<?php
namespace Models;
class propiedad extends ActivarModelo {
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;
    public $foto;
    public $pasatiempo = [];
    public $deporte;

    public function __construct($args = []){
        $this->nombre = $args['nombre']??null;
        $this->apellido = $args['apellido']??null;
        $this->edad = $args['edad']??null;
        $this->direccion = $args['direccion']??null;
        $this->foto = $args['foto']??null;
        $this->pasatiempo = $args['pasatiempo']??[];
        $this->deporte = $args['deporte']??null;


    }
}
