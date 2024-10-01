<?php

namespace Controllers;
use Models\ActivarModelo;
use Models\usuario;
use MVC\Router;

class propiedadAdmin
{
    public static function Dashboard(Router $router){
        $router->render('/admin/dashboard');
    }


    public static function ListarClientes(Router $router)
    {
        $clientes = usuario::listar();
        $router->render('admin/clientes', ['clientes' => $clientes]);
    }

    public static function Borrarusuario(Router $router) {
        usuario::eliminarUser();
        header('location: clientes');
        exit();
    }

    public static function DatosDashboard(Router $router){
        $datos = ActivarModelo::DatosDashboard();
    }


}