<?php

namespace MVC;
class Router {
    public function construct() {
        // echo "Construyendo la ruta";
    }

    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn) {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->postRoutes[$url] = $fn;
    }

    public function ComprobarRutas() {
        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        if ($metodo == 'GET') {
            $fn = $this->getRoutes[$urlActual] ?? null;
        } else {
            $fn = $this->postRoutes[$urlActual] ?? null;
        }

        if ($fn) {
            call_user_func($fn, $this);
        } else {
            // Aquí se pasa 'false' para no renderizar el layout
            $this->render('main/error404', [], false);
        }
    }


    public function render($ubicacion, $datos = [], $conLayout = true) {
        foreach ($datos as $dato => $valor) {
            $$dato = $valor;
        }
        ob_start();
        include __DIR__ . "/views/$ubicacion.php";
        $contenido = ob_get_clean();

        // Solo incluye el layout si $conLayout es verdadero
        if ($conLayout) {
            include_once __DIR__ . "/views/layout.php";
        } else {
            echo $contenido; // Muestra solo el contenido sin el layout
        }
    }

}