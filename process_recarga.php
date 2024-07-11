<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product']; // Esto podría usarse para registrar el tipo de tarjeta o alguna información relevante
    $card_number = $_POST['card_number'];
    $amount = $_POST['amount'];

    // Aquí puedes agregar la lógica para procesar la recarga, como actualizar el saldo de la tarjeta en una base de datos, etc.

    // Ejemplo de acción después de procesar:
    echo "<h2>Recarga Exitosa</h2>";
    echo "<p>Se ha recargado S/ $amount a la tarjeta con número $card_number.</p>";
    echo "<a href='index.php'>Volver</a>";
}
?>
