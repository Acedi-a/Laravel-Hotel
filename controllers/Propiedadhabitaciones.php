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
    public static function CrearHabitacion(Router $router){
        $propiedad = new habitaciones();
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
                header('location: dashboard');
                exit;
            }
        }

        $router->render('/admin/habitacionesCrear',[
            'propiedad' => $propiedad
        ]);


    }
    public static function Obtener(Router $router) {
        if (!isset($_GET['id'])) {
            echo "Error: ID de habitación no proporcionado";
            exit;
        }

        $id = $_GET['id'];


        $habitacion = habitaciones::obtenerHabitacion($id);
        //var_dump($habitacion);
        if (!$habitacion) {
            echo "Error: La habitación no existe";
            exit;
        }

        $tipos_habitacion = tipo_habitacion::obtenerTodos();

        $router->render('admin/habitacionesActualizar', [
            'habitacion' => $habitacion,
            'tipos_habitacion' => $tipos_habitacion
        ]);
    }

}

?>