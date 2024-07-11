<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Compra de Tarjeta</title>
    <style>
        /* Estilos simples para mejorar la apariencia del formulario */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type=text], input[type=email], input[type=number], select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
    <!-- Incluir aquí cualquier CSS necesario -->
    <script>
        // Función para cambiar el valor del campo monto según el tipo de tarjeta seleccionado
        function cambiarMonto() {
            var tipoTarjeta = document.getElementById("tipo_tarjeta").value;
            var monto = document.getElementById("monto");
            
            switch(tipoTarjeta) {
                case "tipoa":
                    monto.value = "15";
                    break;
                case "tipob":
                    monto.value = "10";
                    break;
                case "tipoc":
                    monto.value = "5";
                    break;
                default:
                    monto.value = "";
            }
        }
    </script>
</head>
<body>
    <h2>Compra de Tarjeta</h2>
    
    <form action="process_tarjet.php" method="post">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="tipo_tarjeta">Tipo de tarjeta:</label>
        <select id="tipo_tarjeta" name="tipo_tarjeta" onchange="cambiarMonto()" required>
            <option value="tipoa">Tarjeta tipo A</option>
            <option value="tipob">Tarjeta tipo B</option>
            <option value="tipoc">Tarjeta tipo C</option>
            <!-- Agregar más opciones según sea necesario -->
        </select><br><br>
        
        <label for="numero_tarjeta">Número de tarjeta:</label>
        <input type="text" id="numero_tarjeta" name="numero_tarjeta" required><br><br>
        
        <label for="fecha_vencimiento">Fecha de vencimiento:</label>
        <input type="text" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="MM/AA" required><br><br>
        
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" maxlength="3" required><br><br>
        
        <label for="monto">Monto a pagar:</label>
        <input type="text" id="monto" name="monto" readonly disabled><br><br>
        
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <button type="submit">Comprar Tarjeta</button>
    </form>
</body>
</html>
