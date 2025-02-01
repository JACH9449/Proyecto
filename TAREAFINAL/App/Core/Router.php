<?php

namespace App\Core;

class Router
{
    public function dispatch()
    {
        $request = $_SERVER['REQUEST_URI'];

        switch ($request) {
            case '/':
                echo "Página de inicio";
                $authController = new \App\Controllers\AuthController();
                $authController->showLoginForm();
                break;
            case '/login':
                $authController = new \App\Controllers\AuthController();
                $authController->showLoginForm();
                break;
            case '/users':
                $userController = new \App\Controllers\UserController();
                $userController->index();
                break;
            // Agrega más rutas según sea necesario
            default:
                http_response_code(404);
                echo "Página no encontrada";
                break;
        }
    }
}