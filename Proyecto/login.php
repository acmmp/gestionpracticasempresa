<?php
// login.php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];



    // Ejemplo de conexión a la base de datos
    $servername = "localhost";
    $dbname = "grupal";
    $dbusername = "root";
    $dbpassword = "";


   

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT id, username, role FROM usuarios WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            if ($user['role'] == 'prof') {
                header("Location: inicio.php");
            } else {
                header("Location: inicioalum.php");
            }
            exit();
        } else {
            header("Location: loginindex.php?error=login_failed");
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>
