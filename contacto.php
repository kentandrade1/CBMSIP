<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Dirección de correo a la que se enviará el mensaje
    $destinatario = "ventas@cbm.com.ec";

    // Crea el mensaje de correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $headers = "From: $nombre <$email>";

    // Envía el correo
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        // Éxito
        echo "¡Gracias por contactarnos! Tu mensaje ha sido enviado con éxito.";
    } else {
        // Error
        echo "Lo sentimos, hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
