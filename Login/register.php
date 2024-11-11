
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documentType = $_POST["documentType"];
    $document = $_POST["document"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $address = $_POST["address"];

    // Conexión a la base de datos (ajusta los parámetros según tu configuración)
    $conn = new mysqli("localhost", "usuario", "contraseña", "nombre_base_datos");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (documentType, document, firstName, lastName, phone, email, password, address) 
            VALUES ('$documentType', '$document', '$firstName', '$lastName', '$phone', '$email', '$password', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
