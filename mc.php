<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Método de Medios Cuadrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: separate;
            margin-top: 20px;
            border: 3px solid #ccc;
        }

        th, td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #FFFFCC;
            color: #000;
            font-size: 18px; /* Tamaño de fuente aumentado para los encabezados */
        }

        td {
            background-color: rgba(255, 255, 255, 0.4); /* Color semi-transparente tipo agua */
        }

        a {
            display: block;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            text-decoration: none;
            background-color: #FFD700;
            color: #000;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #000000;
            color: #fff;
        }

        .error-message {
            text-align: center;
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Resultados del Método de Medios Cuadrados</h2>

    <?php
    function mediosCuadrados($semilla, $iteraciones, $digitos) {
        $resultados = array();

        for ($i = 0; $i < $iteraciones; $i++) {
            // Cuadrado de la semilla
            $cuadrado = $semilla * $semilla;

            // Extraer una porción de los dígitos del cuadrado
            $longitud = strlen($cuadrado);
            $inicio = floor(($longitud - $digitos) / 2);
            $numeroAleatorio = substr($cuadrado, $inicio, $digitos);

            // Convertir a número y normalizar entre 0 y 1
            $numeroNormalizado = (float)('0.' . $numeroAleatorio);

            // Agregar al resultado
            $resultados[] = array(
                'iteracion' => $i + 1,
                'semilla' => $semilla,
                'numero_generado' => $numeroNormalizado,
                'cuadrado' => $cuadrado,
            );

            // Usar el resultado como la nueva semilla
            $semilla = (int)$numeroAleatorio;
        }

        return $resultados;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $semillaInicial = $_POST['semilla'];
        $iteraciones = $_POST['iteraciones'];
        $digitos = $_POST['digitos'];

        if (is_numeric($semillaInicial) && is_numeric($iteraciones) && is_numeric($digitos)) {
            $resultados = mediosCuadrados((int)$semillaInicial, (int)$iteraciones, (int)$digitos);
        } else {
            echo "Por favor, ingrese valores numéricos válidos para la semilla inicial, iteraciones y dígitos.";
        }
    }

    if (isset($resultados)) {
        echo "<h3>Secuencia de Números Generados:</h3>";
        echo "<table>";
        echo "<tr><th>Iteración</th><th>Semilla</th><th>Número Generado</th><th>Cuadrado</th></tr>";
        foreach ($resultados as $resultado) {
            echo "<tr>";
            echo "<td>" . $resultado['iteracion'] . "</td>";
            echo "<td>" . $resultado['semilla'] . "</td>";
            echo "<td>" . $resultado['numero_generado'] . "</td>";
            echo "<td>" . $resultado['cuadrado'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

    <br><br>
    <a href="index.html">Volver al formulario</a>
</body>
</html>