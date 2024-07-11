<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recarga de Tarjeta</title>
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
</head>
<body>
    <div class="container">
        <h2>Formulario de Recarga de Tarjeta</h2>
        <form action="process_recarga.php" method="POST">
            <input type="hidden" name="product" value="<?php echo $_GET['product']; ?>">
            <label for="card_number">Número de Tarjeta:</label>
            <input type="text" id="card_number" name="card_number" required><br><br>
            <label for="amount">Monto a Recargar:</label>
            <input type="number" id="amount" name="amount" min="1" required><br><br>
            <input type="submit" value="Recargar">
        </form>
    </div>
</body>
</html>
