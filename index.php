<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de Medios Cuadrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="number"] {
            width: 80%; /* Ancho ajustado */
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Método de Medios Cuadrados</h2>
        <form method="POST" action="mc.php">
            <label for="semilla">Ingrese la Semilla Inicial:</label>
            <input type="number" name="semilla" required><br><br>
            <label for="iteraciones">Ingrese las Iteraciones:</label>
            <input type="number" name="iteraciones" required><br><br>
            <label for="digitos">Ingrese el Número de Dígitos:</label>
            <input type="number" name="digitos" required><br><br>
            <input type="submit" value="Generar Números">
        </form>
    </div>
</body>
</html>