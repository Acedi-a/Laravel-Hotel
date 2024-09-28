<?php

namespace Controllers;
use Models\propiedad;
use MVC\Router;

class propiedadController{
    public static function Index(Router $router){
        //echo "<br>Index<br>";
        $router->render('propiedades\admin',[
            "titulo" => "Enviando datos",
            "notas" => [40,50],
            "nombre" => "Juan"
        ]);
    }


    public static function Crear(Router $router){
        $cliente = new cliente();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cliente  = new cliente(
                $_POST['cliente'],
            );
            //var_dump($cliente);
        }


        $router->render('propiedades\crear',[
            "cliente" => $cliente
        ]);

    }

    public static function Actualizar(){
        echo "<br>Actualizar<br>";
    }
}
