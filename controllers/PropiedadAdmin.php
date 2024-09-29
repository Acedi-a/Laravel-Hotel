<?php

namespace Controllers;
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


}