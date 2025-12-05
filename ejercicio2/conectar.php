<?php
// Datos de conexión a la base de datos (ejercicio2)
    $host='localhost'; // Servidor de BD
    $usuario='root'; // Usuario de BD
    $contraseña=''; // Contraseña del usuario (por defecto XAMPP está vacía)
    $basedatos='bdrutavehicular'; // Nombre de la base de datos para este ejercicio

    // Crea la conexión mysqli y detiene la ejecución si falla
    $conexion=mysqli_connect($host,$usuario,$contraseña,$basedatos) or die("fallo conexion");
?>