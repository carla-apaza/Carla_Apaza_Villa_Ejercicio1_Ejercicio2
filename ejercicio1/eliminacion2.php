<?php
// Incluye la conexión a la base de datos
include("conectar.php");

/* --- ELIMINAR PERSONA --- */
// Verifica que se envió un ID de persona y que no está vacío
if (isset($_POST['idp']) && $_POST['idp'] != "") {

    // Lee el ID enviado por POST
    $idp = $_POST['idp'];

    // Construye la consulta SQL para eliminar la persona por su ID
    $sql = "DELETE FROM persona WHERE idpersona = '$idp'";

    // Ejecuta la consulta y muestra un mensaje según el resultado
    if (mysqli_query($conexion, $sql)) {
        echo "Persona eliminada correctamente<br>";
    } else {
        echo "Error al eliminar persona: " . mysqli_error($conexion) . "<br>";
    }
}

/* --- ELIMINAR AGENDA --- */
// Verifica que se envió un ID de agendación y que no está vacío
if (isset($_POST['idag']) && $_POST['idag'] != "") {

    // Lee el ID de la agenda
    $idag = $_POST['idag'];

    // Construye la consulta SQL para eliminar la agendación por su ID
    $sql2 = "DELETE FROM agendacion WHERE idagendacion = '$idag'";

    // Ejecuta la consulta y muestra un mensaje según el resultado
    if (mysqli_query($conexion, $sql2)) {
        echo "Agendación eliminada correctamente<br>";
    } else {
        echo "Error al eliminar agendación: " . mysqli_error($conexion) . "<br>";
    }
}
?>
