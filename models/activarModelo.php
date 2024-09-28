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
        $query = "SELECT * FROM ".static::$tabla;
        $resulado = self::$db->query($query);
        if ($resulado){
            $usuarios = $resulado->fetch_all(MYSQLI_ASSOC);
        }
        return $usuarios;
    }

    public static function buscar_email($email){
        $query = "SELECT us.*, tc.nombre as tipo_cliente FROM ".static::$tabla." as us join tipo_cliente as tc on tc.id_tipo_cliente = us.id_cliente WHERE email = '$email'";
        $resultado = self::$db->query($query);
        if ($resultado){
            $usuario = $resultado->fetch_all(MYSQLI_ASSOC);
        }
        return $usuario;
    }

    public function crear() {
        $atributos = $this->pasar();
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
}
