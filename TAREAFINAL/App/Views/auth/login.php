<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Contenedor del formulario */
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Título del formulario */
        .login-container h1 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #333333;
        }

        /* Campos del formulario */
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #555555;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #333333;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Botón de envío */
        .login-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        /* Enlace de registro (opcional) */
        .register-link {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #555555;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Iniciar sesión</button>
        </form>
        <div class="register-link">
            ¿No tienes una cuenta? <a href="/register">Regístrate aquí</a>
        </div>
    </div>
</body>
</html>