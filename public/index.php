<?php
require __DIR__ . '/../includes/app.php';

use Controllers\propiedadController;
use Controllers\Propiedadhabitaciones;
use Controllers\propiedadHotel;
use Controllers\propiedadAdmin;
use Controllers\propiedadReserva;
use MVC\Router;

$yo="hola mundo";
$router = new Router();
//$router->get('/admin', 'function_admin' );
//$router->get('/admin', [propiedadController::class, 'Index'] );
//$router->get('/admin/crear', [propiedadController::class, 'Crear'] );
//$router->post('/admin/crear', [propiedadController::class, 'Crear'] );
//$router->get('/admin/actualizar', [propiedadController::class, 'Actualizar'] );
//$router->get('/admin/practica', [propiedadController:s:class, 'Practicas'] );

$router->get('/inicio',[propiedadHotel::class, 'Index']);
$router->get('/register',[propiedadHotel::class, 'Register']);
$router->post('/register',[propiedadHotel::class, 'Register']);
$router->get('/login',[propiedadHotel::class, 'Login']);
$router->post('/login',[propiedadHotel::class, 'Login']);
$router->get('/logout',[propiedadHotel::class, 'Logout']);
$router->get('/perfil',[propiedadHotel::class, 'Perfil']);
$router->get('/habitaciones',[propiedadHotel::class, 'HabitacionesCliente']);
$router->get('/crear-reservacion',[propiedadReserva::class,'Crear']);
$router->post('/crear-reservacion',[propiedadReserva::class,'CrearReservacion']);

$router->get('/gestionar',[propiedadReserva::class, 'Gestionar']);
$router->get('/gestionar_cancelar',[propiedadReserva::class, 'CancelaReserva']);
$router->get('/contacto',[propiedadHotel::class, 'Contacto']);


if (isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo_usuario'] == 'Admin'){
    $router->get('/admin/dashboard',[propiedadAdmin::class, 'Dashboard']);
    $router->get('/admin/clientes',[propiedadAdmin::class, 'ListarClientes']);
    $router->get('/admin/habitaciones',[Propiedadhabitaciones::class, 'ListarHabitaciones']);
}

$router->get('/error404',[propiedadHotel::class, 'error404']);



$router->ComprobarRutas();
