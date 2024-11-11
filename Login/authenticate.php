
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Conexión a la base de datos
    $conn = new mysqli("localhost", "usuario", "contraseña", "nombre_base_datos");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para verificar el usuario
    $sql = "SELECT password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verificar la contraseña ingresada con la almacenada
        if (password_verify($password, $hashed_password)) {
            echo "Login exitoso. ¡Bienvenido!";
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No existe una cuenta con este correo electrónico.";
    }

    $stmt->close();
    $conn->close();
}
?>
