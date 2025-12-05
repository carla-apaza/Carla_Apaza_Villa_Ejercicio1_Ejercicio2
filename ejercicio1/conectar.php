<?php
// Datos de conexión a la base de datos
    $host='localhost'; // Servidor de base de datos (ej. localhost)
    $usuario='root'; // Usuario de la base de datos
    $contraseña=''; // Contraseña del usuario (vacío en entorno local XAMPP)
    $basedatos='bdagenda'; // Nombre de la base de datos a usar

    // Crea la conexión mysqli y muestra un error si falla
    $conexion=mysqli_connect($host,$usuario,$contraseña,$basedatos) or die("fallo conexion");
?>