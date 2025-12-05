<?php
// Incluye la conexión a la base de datos
include("conectar.php");

/* --- MODIFICAR PERSONA --- */
// Comprueba si se envió el formulario de modificación de persona
if (isset($_POST['idp'])) {

    // Recupera valores enviados por POST
    $idp = $_POST['idp'];
    $nom = $_POST['nom'];
    $pat = $_POST['pat'];
    $mat = $_POST['mat'];
    $fecnac = $_POST['fecnac'];

    // Construye la consulta SQL para actualizar los campos de la persona
    $sql1 = "UPDATE persona 
             SET nombre='$nom',
                 paterno='$pat',
                 materno='$mat',
                 fechanacimiento='$fecnac'
             WHERE idpersona='$idp'";

    // Ejecuta la consulta y muestra resultado
    if (mysqli_query($conexion, $sql1)) {
        echo "Persona modificada correctamente<br>";
    } else {
        echo "Error al modificar persona: " . mysqli_error($conexion) . "<br>";
    }
}

/* --- MODIFICAR AGENDA --- */
// Comprueba si se envió el formulario de modificación de agenda
if (isset($_POST['idag'])) {

    // Recupera valores enviados por POST
    $idag = $_POST['idag'];
    $fec = $_POST['fec'];
    $hor = $_POST['hor'];
    $act = $_POST['act'];
    $comp = $_POST['comp'];  // contiene 'si' o 'no' según el formulario

    // Construye la consulta SQL para actualizar la agendación
    $sql2 = "UPDATE agendacion 
             SET fecha='$fec',
                 hora='$hor',
                 actividad='$act',
                 completado='$comp'
             WHERE idagendacion='$idag'";

    // Ejecuta la consulta y muestra resultado
    if (mysqli_query($conexion, $sql2)) {
        echo "Agendación modificada correctamente<br>";
    } else {
        echo "Error al modificar agenda: " . mysqli_error($conexion) . "<br>";
    }
}
?>
