<?php
namespace Models;

class ActivarModelo
{
    protected static $db;
    protected static $tabla;
    protected static $columnDB = [];

    public static function setDB($dbapp)
    {
        self::$db = $dbapp;
    }

    public static function listar(){
        $query = "SELECT us.*, tu.nombre as tipo_usuario FROM ".static::$tabla." as us join tipos_usuarios as tu on tu.id_tipo_usuario = us.id_tipo_usuario";
        $resulado = self::$db->query($query);
        if ($resulado){
            $usuarios = $resulado->fetch_all(MYSQLI_ASSOC);
        }
        return $usuarios;
    }

    public static function buscar_email($email){
        $query = "SELECT us.*, tu.nombre as tipo_usuario FROM ".static::$tabla." as us join tipos_usuarios as tu on tu.id_tipo_usuario = us.id_tipo_usuario WHERE email = '$email'";
        $resultado = self::$db->query($query);
        if ($resultado){
            $usuario = $resultado->fetch_all(MYSQLI_ASSOC);
        }
        return $usuario;
    }

    public function crear() {
        $atributos = $this->pasar();
        //var_dump($atributos);
        $columnas = array_keys($atributos);
        $valores = array_values($atributos);

        $query = "INSERT INTO " . static::$tabla . " (";
        $query .= join(", ", $columnas);
        $query .= ") VALUES (";

        $valoresFormateados = array_map(function($valor) {
            if (is_null($valor)) {
                return "'foto'";
            } elseif (is_numeric($valor)) {
                return $valor;
            } else {
                return "'" . $valor . "'";
            }
        }, $valores);

        $query .= join(", ", $valoresFormateados);
        $query .= ")";

        //echo $query;
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function pasar() {
        $atributos = get_object_vars($this);
        $resultado = [];
        foreach ($atributos as $key => $value) {
            if (!is_null($value) && isset(static::$columnDB) && in_array($key, static::$columnDB)) {
                $resultado[$key] = self::$db->escape_string($value);
            }
        }
        return $resultado;
    }
    public static function listarhabitacion() {
        $query = "SELECT h.*, t.nombre, t.descripcion 
              FROM " . static::$tabla . " h
              LEFT JOIN tipos_habitacion t ON h.id_tipo = t.id_tipo";
        $resultado = self::$db->query($query);
        if ($resultado) {
            $habitaciones = $resultado->fetch_all(MYSQLI_ASSOC);
            //var_dump($habitaciones);
        }
        return $habitaciones;
    }



    public static function obtenerHabitacion($id) {
        $query = "SELECT * 
                  FROM " . "habitaciones" . " as h 
                  WHERE h.id_habitacion = " . self::$db->escape_string($id);
        
        $resultado = self::$db->query($query);
    
        if ($resultado && $resultado->num_rows > 0) {
            $habitacion = $resultado->fetch_assoc();
    
            // Convertir los campos booleanos a verdadero booleano
            $habitacion['wifi'] = (bool)$habitacion['wifi'];
            $habitacion['bano'] = (bool)$habitacion['bano'];
            $habitacion['tv'] = (bool)$habitacion['tv'];
    
            return $habitacion;
        }
    
        return null;
    }

    public static function listarReservasPorUsuario() {
        $id_usuario = intval($_GET['id']);
        $query = "SELECT r.*, h.numero FROM reservas r INNER JOIN habitaciones h ON r.id_habitacion = h.id_habitacion WHERE id_usuario = $id_usuario";
;
    
        $resultado = self::$db->query($query);
        if ($resultado) {
            $reservas = $resultado->fetch_all(MYSQLI_ASSOC);
        }
        return $reservas;
    }

    public static function CancelarReservaPorId() {
        $id_reserva = intval($_GET['id']);
        $query = "UPDATE reservas SET estado = 0 WHERE id_reserva = $id_reserva";
        self::$db->query($query);
    }
    public static function all() {
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::$db->query($query);
        if ($resultado) {
            $registro = $resultado->fetch_all(MYSQLI_ASSOC);

        }
        return $registro;
    }

    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id_tipo = " . self::$db->escape_string($id);
        $resultado = self::$db->query($query);
        if ($resultado && $resultado->num_rows === 1) {
            $registro = $resultado->fetch_assoc();
            return static::crearObjeto($registro);
        }
        return null;
    }

    protected static function crearObjeto($registro) {
        $objeto = new static;
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    public function guardar() {
        $atributos = $this->sanitizarAtributos();
        if (!isset($this->id_tipo)) {
            return $this->creartipo($atributos);
        } else {
            return $this->actualizar($atributos);
        }
    }

    protected function creartipo($atributos) {
        $query = "INSERT INTO " . static::$tabla . " (";
        $query .= join(', ', array_keys($atributos));
        $query .= ") VALUES ('";
        $query .= join("', '", array_values($atributos));
        $query .= "')";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    protected function actualizar($atributos) {
        $valores = [];
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE id_tipo = '" . self::$db->escape_string($this->id_tipo) . "' ";
        $query .= " LIMIT 1 ";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function eliminar() {
        $query = "DELETE FROM " . static::$tabla . " WHERE id_tipo = " . self::$db->escape_string($this->id_tipo) . " LIMIT 1";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function atributos() {
        $atributos = [];
        foreach (static::$columnDB as $columna) {
            if ($columna === 'id_tipo') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos() {
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    public function sincronizar($args = []) {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }

    public function validar() {
        $errores = [];
        if (!$this->nombre) {
            $errores[] = "El nombre es obligatorio";
        }
        if (!$this->descripcion) {
            $errores[] = "La descripción es obligatoria";
        }
        return $errores;
    }
    
}
