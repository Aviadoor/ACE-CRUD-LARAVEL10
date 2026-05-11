<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
</head>
<body>

    <h2>Iniciar Sesión</h2>

    <form method="POST">
        @csrf
        <!-- Campo de Usuario -->
        <div>
            <label for="usuario">Nombre de usuario:</label><br>
            <input type="text" id="usuario" name="usuario" required>
        </div>

        <br>

        <!-- Campo de Contraseña -->
        <div>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required>
        </div>
        <p>No tienes cuenta? <a href="{{ route('user.register_user') }}">Registrar</a></p>

        <br>

        <!-- Botón de Envío -->
        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>

</body>
</html>