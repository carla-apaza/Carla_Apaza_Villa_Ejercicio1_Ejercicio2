<?php
// Incluye el archivo que establece la conexión a la base de datos
include("conectar.php");

// --- INSERTAR PERSONA ---
// Comprueba si el formulario de persona fue enviado verificando si existe 'idpers' en POST
if (isset($_POST['idpers'])) {

    // Recupera los valores enviados por POST y los asigna a variables locales
    $idpers = $_POST['idpers'];
    $nom = $_POST['nom'];
    $pat = $_POST['pat'];
    $mat = $_POST['mat'];
    $fecnac = $_POST['fecnac'];

    // Construye la sentencia SQL para insertar una nueva fila en la tabla 'persona'
    $sql1 = "INSERT INTO persona(idpersona, nombre, paterno, materno, fechanacimiento)
             VALUES ('$idpers', '$nom', '$pat', '$mat', '$fecnac')";
    
    // Ejecuta la consulta y verifica si se realizó correctamente
    if (mysqli_query($conexion, $sql1)) {
        // Mensaje de éxito si la inserción fue exitosa
        echo "Persona registrada correctamente<br>";
    } else {
        // Muestra el error devuelto por MySQL en caso de fallo
        echo "Error al registrar persona: " . mysqli_error($conexion) . "<br>";
    }
}

// --- INSERTAR AGENDA ---
// Comprueba si el formulario de agendación fue enviado verificando si existe 'idagen' en POST
if (isset($_POST['idagen'])) {

    // Recupera los valores enviados por POST y los asigna a variables locales
    $idagen = $_POST['idagen'];
    $fec = $_POST['fec'];
    $hor = $_POST['hor'];
    $act = $_POST['act'];
    $comp = $_POST['comp'];

    // Construye la sentencia SQL para insertar una nueva fila en la tabla 'agendacion'
    $sql2 = "INSERT INTO agendacion(idagendacion, fecha, hora, actividad, completado)
             VALUES ('$idagen', '$fec', '$hor', '$act', '$comp')";
    
    // Ejecuta la consulta y verifica si se realizó correctamente
    if (mysqli_query($conexion, $sql2)) {
        // Mensaje de éxito si la inserción fue exitosa
        echo "Agendación registrada correctamente<br>";
    } else {
        // Muestra el error devuelto por MySQL en caso de fallo
        echo "Error al registrar agendación: " . mysqli_error($conexion) . "<br>";
    }
}

?>
