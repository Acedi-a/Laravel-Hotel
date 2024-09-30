<?php

namespace Controllers;

use Models\tipo_habitacion;
use MVC\Router;

class PropiedadTipoHabitacion {
    public static function ListarTipoHab(Router $router) {
        $tiposHabitacion = tipo_habitacion::all();
        $router->render('admin/tipo_habitaciones', [
            "tiposHabitacion" => $tiposHabitacion
        ]);
    }

    public static function Crear(Router $router) {
        $tipoHabitacion = new tipo_habitacion();
        $errores = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipoHabitacion = new tipo_habitacion($_POST['tipoHabitacion']);
            $errores = $tipoHabitacion->validar();

            if (empty($errores)) {
                $tipoHabitacion->guardar();
                header('Location: /tipos_habitacion');
            }
        }

        $router->render('tipohabitacion/crear', [
            "titulo" => "Crear Tipo de Habitación",
            "tipoHabitacion" => $tipoHabitacion,
            "errores" => $errores
        ]);
    }

    public static function Actualizar(Router $router) {
        $id = validarORedireccionar('/tipos_habitacion');
        $tipoHabitacion = tipo_habitacion::find($id);
        $errores = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST['tipoHabitacion'];
            $tipoHabitacion->sincronizar($args);
            $errores = $tipoHabitacion->validar();

            if (empty($errores)) {
                $tipoHabitacion->guardar();
                header('Location: /tipos_habitacion');
            }
        }

        $router->render('tipohabitacion/actualizar', [
            "titulo" => "Actualizar Tipo de Habitación",
            "tipoHabitacion" => $tipoHabitacion,
            "errores" => $errores
        ]);
    }

    public static function Eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipoHabitacion = tipo_habitacion::find($id);
                $tipoHabitacion->eliminar();
                header('Location: /tipos_habitacion');
            }
        }
    }
}