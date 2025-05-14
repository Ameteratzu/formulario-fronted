<?php
    if ($_SERVER["REQUEST_METHOD" =="POST"]){
        $nombre = $_POST["nombre"];
        // $apellidos = $_POST["apellidos"];
        $correo = $_POST["email"];
        $mensaje = $_POST["mensaje"];

        $destinatario = "correo@gmail.com";
        $asunto = "Mensaje de contacto de $nombre";
        $contenido = "Nombres: $nombre\n";
        $contenido .= "Correo electronico: $correo\n";
        $contenido .= "Mensaje: $mensaje\n";
        $contraseña = $_POST["contraseña"];

        $cabeceras = "From: $correo ";
        
        mail($destinatario,$asunto,$contenido,$cabeceras);
        
        echo "<p> Mensaje envidado con exito </p> ";
        

    }
?>