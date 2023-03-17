<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {

        //session_start(); //Ya no parece válido, revisar

        isAuth();

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}