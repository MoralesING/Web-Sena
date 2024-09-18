<?php

$enlace = mysqli_connect("localhost", "u408629193_eduassist360", "I.Morales.@eduassist360", "u408629193_eduassist360");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario
    $nombre = $_POST['usuario'];
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];

    echo "Datos recibidos: nombre = $nombre, email = $email, pasword = $pasword<br>";
}

?>