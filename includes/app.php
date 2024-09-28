<?php
session_start();
//hola
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/database.php';
use Models\ActivarModelo;
$db = conectarDB();
ActivarModelo::setDB($db);

