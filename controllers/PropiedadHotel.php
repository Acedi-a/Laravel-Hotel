<?php

namespace Controllers;
use Models\cliente;
use MVC\Router;

class propiedadHotel
{
    public static function Index(Router $router)
    {
        $router->render('main/inicio');
    }

    public static function ListarClientes(Router $router)
    {
        $clientes = cliente::listar();
        $router->render('main/clientes', ['clientes' => $clientes]);
    }

    public static function Register(Router $router){
        $cliente = new cliente();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cliente = new cliente(
                $_POST['cliente'],
            );
            $resultado = $cliente->crear();
            if ($resultado) {
                echo "Usuario creado con exito";
            }
            else{
                echo "Error al insertar usuario";
            }
        }

        var_dump($cliente);
        $router->render('main/registrarse',[
            "cliente" => $cliente
        ]);
    }

    public static function Login(Router $router){
        $cliente = new cliente();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cliente = new cliente(
                $_POST['cliente'],
            );
            $cliente_login = cliente::buscar_email($cliente->email);
            if ($cliente_login){
                //var_dump($cliente_login);

                if ($cliente_login[0]['password'] == $cliente->password){
                    $_SESSION['usuario'] = $cliente_login[0]; // Se guardan los datos del usuario
                    //var_dump($_SESSION['usuario']);
                    self::index($router);
                }
                else{
                    //unset($_SESSION['cliente']);
                    session_destroy();
                    echo <<<ERROR
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">¡Error!</strong>
                          <span class="block sm:inline">EMAIL O CONTRASEÑA INCORRECTA.</span>
                          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                          </span>
                        </div>
                    ERROR;


                }

            }
            else{
                echo <<<ERROR
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">¡Error!</strong>
                          <span class="block sm:inline">EMAIL O CONTRASEÑA INCORRECTA.</span>
                          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                          </span>
                        </div>
                    ERROR;
            }
        }

        //var_dump($cliente);

        $router->render('main/login',[
            "cliente" => $cliente
        ]);
    }

    public static function Logout(){
     session_destroy();
     session_abort();
     unset($_SESSION['usuario']);
     header('location: inicio');
    }

    public static function Perfil(Router $router){
        $cliente = $_SESSION['usuario'];
        //var_dump($cliente);
        $router->render('main/perfil',['cliente' => $cliente]);
    }




}