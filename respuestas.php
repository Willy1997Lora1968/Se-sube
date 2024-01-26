<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $sugerencia = $_POST['sugerencia'];

    // Aquí puedes procesar la sugerencia y generar una respuesta.
    // Por ejemplo, podrías buscar en una base de datos de preguntas y respuestas sobre traumatología.

    $respuesta = 'Aquí va la respuesta a la sugerencia de ' . $nombre . ': ' . $sugerencia;

    echo $respuesta;
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="correo">Correo electrónico:</label><br>
    <input type="text" id="correo" name="correo"><br>
    <label for="sugerencia">¿Qué te gustaría escuchar sobre traumatología?</label><br>
    <input type="text" id="sugerencia" name="sugerencia"><br>
    <input type="submit" value="Enviar">
</form>
