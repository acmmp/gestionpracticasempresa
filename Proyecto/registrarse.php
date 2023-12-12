<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "grupal";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Recoger datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"]; // ADVERTENCIA: Almacenar contraseñas de esta manera no es segura.
    
    // Definir el rol (en este caso, "alum")
    $role = "alum";

    // Insertar datos en la base de datos con el rol asignado
    $sql = "INSERT INTO usuarios (username, password, role) VALUES ('$username', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        // Usuario registrado con éxito, redirigir y mostrar la alerta
        echo "<script>alert('Usuario registrado con éxito');</script>";
        header("Location: loginindex.php");
    } else {
        // Hubo un error, redirigir y mostrar la alerta de error
        echo "<script>alert('Error al registrar usuario');</script>";
        header("Location: loginindex.php");
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
