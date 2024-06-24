<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $fullname = $_POST['fullname'];
    $shortname = $_POST['shortname'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];
    $format = $_POST['format'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $numsections = $_POST['numsections'];
    $hiddensections = $_POST['hiddensections'];

    // Nombre del archivo CSV
    $nombre_archivo = 'curso.csv';

    // Abrir o crear el archivo CSV en modo escritura
    $archivo_csv = fopen($nombre_archivo, 'w');

    // Escribir los encabezados en minúsculas y sin comillas
    $encabezados = array('fullname', 'shortname', 'category', 'summary', 'format', 'startdate', 'enddate', 'numsections', 'hiddensections');
    fputcsv($archivo_csv, $encabezados);

    // Escribir los datos en una fila del archivo CSV sin comillas
    $datos = array($fullname, $shortname, $category, $summary, $format, $startdate, $enddate, $numsections, $hiddensections);
    fputcsv($archivo_csv, $datos);

    // Cerrar el archivo
    fclose($archivo_csv);

    // Establecer los encabezados HTTP para descargar el archivo
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');
    header('Pragma: no-cache');
    header('Expires: 0');

    // Limpiar el búfer de salida para evitar problemas de caché
    ob_clean();
    flush();

    // Leer el archivo y enviar su contenido al navegador
    readfile($nombre_archivo);

    // Eliminar el archivo después de la descarga (opcional)
    unlink($nombre_archivo);

    // Salir del script para evitar que se muestre el formulario nuevamente
    exit;
} else {
    // Redireccionar si el formulario no se envía correctamente
    header("Location: index.php");
    exit;
}
?>
