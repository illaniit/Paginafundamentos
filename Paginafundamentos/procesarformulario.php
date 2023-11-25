<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];



    echo "Nombre: $nombre <br>";
    echo "Correo electrónico: $email <br>";
    echo "Mensaje: $mensaje <br>";
}
?>
