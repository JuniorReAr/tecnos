<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];

    // Aquí puedes agregar la lógica para procesar la orden, como enviar un correo electrónico de confirmación, guardar en una base de datos, etc.

    // Ejemplo de acción después de procesar:
    echo "<h2>Gracias por tu compra de $product, $name.</h2>";
    echo "<p>Se enviará un correo electrónico de confirmación a $email.</p>";
    echo "<a href='index.php'>Volver</a>";
}
?>
