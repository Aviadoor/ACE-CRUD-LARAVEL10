<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>

    <h2>Crear una cuenta</h2>

    <form method="POST">
        
        @csrf
        
        <div>
            <label for="nombre">Nombre de Usuario:</label><br>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <br>

        <div>
            <label for="email">Correo electrónico:</label><br>
            <input type="email" id="email" name="email" required>
        </div>

        <br>

        <div>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" minlength="8" required>
        </div>

        <br>

        <div>
            <button type="submit">Registrarse</button>
        </div>
    </form>

</body>
</html>