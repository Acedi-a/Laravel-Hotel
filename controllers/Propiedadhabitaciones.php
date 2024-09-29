<?php
namespace Controllers;

use Models\habitaciones;
use MVC\Router;

class Propiedadhabitaciones{
    public static function ListarHabitaciones(Router $router)
    {
        $propiedad = habitaciones::listarhabitacion();
        $router->render('/admin/habitaciones', [
            'propiedad' => $propiedad
        ]);

    }
    public static function Crear(Router $router){
        $propiedad = new habitaciones();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $propiedad=new habitaciones($_POST["habitaciones"]);
            $resultado=$propiedad->crear();
            if ($resultado){
                echo "se inserto los datos";
            }
        }

        $router->render('/propiedades/crear',[
            'propiedad' => $propiedad
        ]);

        echo "Crear";
    }
}

?>