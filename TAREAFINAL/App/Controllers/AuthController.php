<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function showLoginForm()
    {
        include __DIR__ . '/../views/auth/login.php';
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: /');
        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
    }
}