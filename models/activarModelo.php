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

        echo $query;
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
}
