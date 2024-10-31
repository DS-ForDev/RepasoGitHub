
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="register.php" method="POST">
            <label for="documentType">Tipo de Documento:</label>
            <select name="documentType" required>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="PA">Pasaporte</option>
                <option value="CE">Cédula de Extranjería</option>
            </select>

            <label for="document">Documento:</label>
            <input type="text" name="document" required>

            <label for="firstName">Nombres:</label>
            <input type="text" name="firstName" required>

            <label for="lastName">Apellidos:</label>
            <input type="text" name="lastName" required>

            <label for="phone">Teléfono:</label>
            <input type="text" name="phone" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>

            <label for="address">Dirección:</label>
            <input type="text" name="address" required>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>
