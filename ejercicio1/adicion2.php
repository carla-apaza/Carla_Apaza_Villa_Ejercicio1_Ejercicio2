<?php
include("conectar.php");

// --- INSERTAR PERSONA ---
if (isset($_POST['idpers'])) {

    $idpers = $_POST['idpers'];
    $nom = $_POST['nom'];
    $pat = $_POST['pat'];
    $mat = $_POST['mat'];
    $fecnac = $_POST['fecnac'];

    $sql1 = "INSERT INTO persona(idpersona, nombre, paterno, materno, fechanacimiento)
             VALUES ('$idpers', '$nom', '$pat', '$mat', '$fecnac')";
    
    if (mysqli_query($conexion, $sql1)) {
        echo "Persona registrada correctamente<br>";
    } else {
        echo "Error al registrar persona: " . mysqli_error($conexion) . "<br>";
    }
}

// --- INSERTAR AGENDA ---
if (isset($_POST['idagen'])) {

    $idagen = $_POST['idagen'];
    $fec = $_POST['fec'];
    $hor = $_POST['hor'];
    $act = $_POST['act'];
    $comp = $_POST['comp'];

    $sql2 = "INSERT INTO agendacion(idagendacion, fecha, hora, actividad, completado)
             VALUES ('$idagen', '$fec', '$hor', '$act', '$comp')";
    
    if (mysqli_query($conexion, $sql2)) {
        echo "Agendación registrada correctamente<br>";
    } else {
        echo "Error al registrar agendación: " . mysqli_error($conexion) . "<br>";
    }
}

?>
