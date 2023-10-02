<!DOCTYPE html>
<html>
<head>
    <title>Registro de Asistencia</title>
</head>
<body>
    <h1>Registro de Asistencia</h1>

    <?php
    // Lee el contenido del archivo de registro
    $archivoRegistro = "/var/www/html/registro_asistencia.txt";

    if (file_exists($archivoRegistro)) {
        $contenido = file_get_contents($archivoRegistro);

        // Divide el contenido en líneas y muestra cada entrada
        $lineas = explode("\n", $contenido);

        echo "<ul>";
        foreach ($lineas as $linea) {
            if (!empty($linea)) {
                echo "<li>" . htmlentities($linea) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "El registro está vacío.";
    }
    ?>
</body>
</html>
