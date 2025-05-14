<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $mensaje = $_POST["comments"];

    $destinatario = "quispeamet2@gmail.com";
    $asunto = "Mensaje de contacto de $nombre";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $correo\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $cabeceras = "From: $correo";

    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        echo "<p>Mensaje enviado con éxito.</p>";
    } else {
        echo "<p>Error al enviar el mensaje.</p>";
    }
}
?>
