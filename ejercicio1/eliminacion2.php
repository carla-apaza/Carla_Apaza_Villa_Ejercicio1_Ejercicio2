<?php
include("conectar.php");

/* --- ELIMINAR PERSONA --- */
if (isset($_POST['idp']) && $_POST['idp'] != "") {

    $idp = $_POST['idp'];

    $sql = "DELETE FROM persona WHERE idpersona = '$idp'";

    if (mysqli_query($conexion, $sql)) {
        echo "Persona eliminada correctamente<br>";
    } else {
        echo "Error al eliminar persona: " . mysqli_error($conexion) . "<br>";
    }
}

/* --- ELIMINAR AGENDA --- */
if (isset($_POST['idag']) && $_POST['idag'] != "") {

    $idag = $_POST['idag'];

    $sql2 = "DELETE FROM agendacion WHERE idagendacion = '$idag'";

    if (mysqli_query($conexion, $sql2)) {
        echo "Agendación eliminada correctamente<br>";
    } else {
        echo "Error al eliminar agendación: " . mysqli_error($conexion) . "<br>";
    }
}
?>
