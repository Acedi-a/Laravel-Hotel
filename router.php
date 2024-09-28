<?php

namespace MVC;
class Router {
    public function __construct() {
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
        }
        else{
            $fn = $this->postRoutes[$urlActual] ?? null;
        }

        if ($fn) {
            call_user_func($fn, $this);
        } else {
            echo "La ruta no se encuentra";
        }
    }

    public function render($ubicacion,$datos=[]){
        foreach ($datos as $dato => $valor) {
            $$dato = $valor;
        }
        include __DIR__ . "/views/$ubicacion.php";
        $contenido = ob_get_clean();
        include_once __DIR__ . "/views/layout.php";

    }
}
