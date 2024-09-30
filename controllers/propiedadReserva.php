<?php
namespace Controllers;

use Models\reservas;
use Models\usuario;
use MVC\Router;


class propiedadReserva{


    //FUNCION DISTINTO, NO CREA, SINO OBTIENE DATOS DE LA HABITACION ANTES DE DESPLEGAR FORM
    public static function Crear() {
        
        if (!isset($_GET['id'])) {
        
            echo "error";
            exit;
        }
    
        $id = $_GET['id'];
        
        
        $habitacion = reservas::obtenerHabitacion($id);
    
        if (!$habitacion) {
           
            echo "No existe";
            exit;
        }
        //var_dump($habitacion);
        // Renderizar la vista con los datos del usuario
        $router = new Router();
        $router->render('main/reservas', [
            'habitacion' => $habitacion
        ]);
    }

    public static function CrearReservacion(Router $router) {
        $reserva = new reservas();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $reserva=new reservas($_POST["reserva"]);
            $resultado=$reserva->crear();
            if ($resultado){
                echo "se inserto los datos";
            }
        }
        echo "Crear";
        $router->render('/main/inicio',[
            'reserva' => $reserva
        ]);

        
    
    }


    public static function Gestionar(Router $router) {
        $propiedad = reservas::listarReservasPorUsuario();
        $router->render('/main/gestion', [
            'reservas' => $propiedad
        ]);
    }
}