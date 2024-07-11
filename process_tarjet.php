<?php
// Validar que se haya enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recibir y limpiar los datos del formulario
    $nombre = limpiar_datos($_POST["nombre"]);
    $tipo_tarjeta = limpiar_datos($_POST["tipo_tarjeta"]);
    $numero_tarjeta = limpiar_datos($_POST["numero_tarjeta"]);
    $fecha_vencimiento = limpiar_datos($_POST["fecha_vencimiento"]);
    $cvv = limpiar_datos($_POST["cvv"]);
    $correo = limpiar_datos($_POST["correo"]);
    
    // Validar que los campos no estén vacíos (esto es solo un ejemplo, deberías hacer validaciones más específicas según tus necesidades)
    if (empty($nombre) || empty($tipo_tarjeta) || empty($numero_tarjeta) || empty($fecha_vencimiento) || empty($cvv) || empty($correo)) {
        die("Por favor completa todos los campos del formulario.");
    }
    
    // Simular el proceso de compra (aquí puedes integrar la lógica real de tu aplicación)
    // Por simplicidad, aquí solo mostraremos un mensaje de éxito con los datos recibidos
    
    $mensaje = "Compra de tarjeta realizada con éxito:\n";
    $mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Tipo de tarjeta: $tipo_tarjeta\n";
    $mensaje .= "Número de tarjeta: $numero_tarjeta\n";
    $mensaje .= "Fecha de vencimiento: $fecha_vencimiento\n";
    $mensaje .= "CVV: $cvv\n";
    $mensaje .= "Correo electrónico: $correo\n";
    
    // Aquí podrías enviar un correo electrónico de confirmación, almacenar los datos en una base de datos, etc.
    
    // Mostrar mensaje de éxito (simulado)
    echo "<h2>¡Compra Exitosa!</h2>";
    echo "<p>$mensaje</p>";
    echo "<a href='index.php'>Volver</a>";
    
} else {
    // Si no se ha enviado el formulario, redirigir o mostrar mensaje de error
    echo "Acceso no autorizado";
    echo "<a href='index.php'>Volver</a>";
}

// Función para limpiar y validar los datos
function limpiar_datos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}
?>
