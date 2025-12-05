<?php
include("conectar.php");

/* --- MODIFICAR PERSONA --- */
if (isset($_POST['idp'])) {

    $idp = $_POST['idp'];
    $nom = $_POST['nom'];
    $pat = $_POST['pat'];
    $mat = $_POST['mat'];
    $fecnac = $_POST['fecnac'];

    $sql1 = "UPDATE persona 
             SET nombre='$nom',
                 paterno='$pat',
                 materno='$mat',
                 fechanacimiento='$fecnac'
             WHERE idpersona='$idp'";

    if (mysqli_query($conexion, $sql1)) {
        echo "Persona modificada correctamente<br>";
    } else {
        echo "Error al modificar persona: " . mysqli_error($conexion) . "<br>";
    }
}

/* --- MODIFICAR AGENDA --- */
if (isset($_POST['idag'])) {

    $idag = $_POST['idag'];
    $fec = $_POST['fec'];
    $hor = $_POST['hor'];
    $act = $_POST['act'];
    $comp = $_POST['comp'];  // <-- ahora contiene 'si' o 'no'

    $sql2 = "UPDATE agendacion 
             SET fecha='$fec',
                 hora='$hor',
                 actividad='$act',
                 completado='$comp'
             WHERE idagendacion='$idag'";

    if (mysqli_query($conexion, $sql2)) {
        echo "Agendación modificada correctamente<br>";
    } else {
        echo "Error al modificar agenda: " . mysqli_error($conexion) . "<br>";
    }
}
?>
