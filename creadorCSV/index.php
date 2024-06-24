<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5">
        <h6>Ingresa los datos para generar el archivo CSV:</h6>
        <!-- Enlace para guiar sobre los campos -->
        <p class="mt-3">¿Necesitas ayuda con los campos? Consulta <a href="https://docs.moodle.org/all/es/Subir_cursos" target="_blank">aquí</a>.</p>
        <form method="post" action="generar_csv.php">
            <div class="form-group">
                <label for="fullname">Nombre completo:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="shortname">Nombre corto:</label>
                <input type="text" class="form-control" id="shortname" name="shortname" required>
            </div>

            <input type="hidden" id="category" name="category" value="1">

            <div class="form-group">
                <label for="summary">Resumen:</label>
                <textarea class="form-control" id="summary" name="summary" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="format">Formato:</label>
                <input type="text" class="form-control" id="format" name="format" required>
            </div>

            <div class="form-group">
                <label for="startdate">Fecha de inicio:</label>
                <input type="date" class="form-control" id="startdate" name="startdate" required>
            </div>

            <div class="form-group">
                <label for="enddate">Fecha de finalización:</label>
                <input type="date" class="form-control" id="enddate" name="enddate" required>
            </div>

            <div class="form-group">
                <label for="numsections">Número de secciones:</label>
                <input type="number" class="form-control" id="numsections" name="numsections" required>
            </div>

            <input type="hidden" id="hiddensections" name="hiddensections" value="0">

            <button type="submit" class="btn btn-primary">Descargar CSV</button>

            <p class="mt-3">¿Necesitas ir a subir cursos? Consulta <a href="http://localhost/moodle/admin/tool/uploadcourse/index.php" target="_blank">aquí</a>.</p>
            
        </form>
    </div>
    <!-- Enlace al archivo JavaScript de Bootstrap y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
