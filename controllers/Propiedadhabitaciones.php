<?php
namespace Controllers;

use Models\habitaciones;
use Models\tipo_habitacion;
use MVC\Router;

class Propiedadhabitaciones{
    public static function ListarHabitaciones(Router $router)
    {
        $propiedad = habitaciones::listarhabitacion();
        $router->render('/admin/habitaciones', [
            'propiedad' => $propiedad
        ]);

    }

    public static function HabitacionesCliente(Router $router){
        $habitacionesModel = new Habitaciones();
        $habitaculo = $habitacionesModel->listarhabitacion();
        //var_dump($habitaculo);

        $router->render('main/habitaciones', ['habitaciones' => $habitaculo]);
    }

    public static function CrearHabitacion(Router $router){
        $propiedad = new habitaciones();
        $tipos_habitacion = tipo_habitacion::obtenerTodos();

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $args = $_POST["habitacion"];

            // Manejo de checkboxes
            $args['wifi'] = isset($args['wifi']) ? 1 : 0;
            $args['bano'] = isset($args['bano']) ? 1 : 0;
            $args['tv'] = isset($args['tv']) ? 1 : 0;
            $args['estado'] = isset($args['estado']) ? 1 : 0;

            $propiedad = new habitaciones($args);
            //$propiedad=new habitaciones($_POST["habitacion"]);
            $nombre_imagen=$_FILES['habitacion']['name']['foto'];
            $ubicacion=__DIR__ . '/../src/habitacion/'.$nombre_imagen;
            move_uploaded_file($_FILES['habitacion']['tmp_name']['foto'],$ubicacion);
            $propiedad->setImagen($nombre_imagen);
            $resultado=$propiedad->crear();
            if ($resultado){
                header('location: habitaciones');
                exit;
            }
        }

        $router->render('/admin/habitacionesCrear',[
            'propiedad' => $propiedad,
            'tipos_habitacion' => $tipos_habitacion
        ]);


    }
    public static function Obtener(Router $router) {
        if (!isset($_GET['id'])) {
            echo "Error: ID de habitación no proporcionado";
            exit;
        }

        $id = $_GET['id'];
        $habitacion = habitaciones::obtenerhab($id);

        if (!$habitacion) {
            echo "Error: La habitación no existe";
            exit;
        }

        $tipos_habitacion = tipo_habitacion::obtenerTodos();

        $tipos_habitacion = array_map(function($tipo) {
            return (array)$tipo;
        }, $tipos_habitacion);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST['habitacion'];

            $habitacionActual = habitaciones::obtenerhab($id);

            // Manejo de checkboxes
            $args['wifi'] = isset($args['wifi']) ? 1 : 0;
            $args['bano'] = isset($args['bano']) ? 1 : 0;
            $args['tv'] = isset($args['tv']) ? 1 : 0;
            $args['estado'] = isset($args['estado']) ? 1 : 0;


            if ($_FILES['habitacion']['name']['foto']) {
                $nombre_imagen = $_FILES['habitacion']['name']['foto'];
                $ubicacion = __DIR__ . '/../src/habitacion/' . $nombre_imagen;
                move_uploaded_file($_FILES['habitacion']['tmp_name']['foto'], $ubicacion);
                $args['foto'] = $nombre_imagen;
            } else {
                $args['foto'] = $habitacionActual['foto'];
            }


            $datosActualizados = array_merge($habitacionActual, $args);

            $habitacion = new habitaciones($datosActualizados);
            $resultado = $habitacion->actualizarhab();
            if ($resultado) {
                header('Location: habitaciones');
                exit;
            } else {
                echo "Error al actualizar: " . self::$db->error;
            }
        }
        $router->render('admin/habitacionesActualizar', [
            'habitacion' => $habitacion,
            'tipos_habitacion' => $tipos_habitacion
        ]);
    }

}

?>