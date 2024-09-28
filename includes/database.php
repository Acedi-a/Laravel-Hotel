<?php

function conectarDB():mysqli {
    $servidor = "localhost";
    $usuario = "root";
    $pass = "";
    $database = "hote_tecnologiaweb";

    $db = new mysqli($servidor, $usuario, $pass, $database);
    if (!$db) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        exit;
    }
    return $db;
}
