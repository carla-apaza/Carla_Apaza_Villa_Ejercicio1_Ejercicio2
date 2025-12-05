<?php
// Incluye la conexión a la base de datos
include("conectar.php");

// Lee los valores enviados por POST desde el formulario de recorrido
$idchofer = $_POST['idchofer'];
$idvehiculo = $_POST['idvehiculo'];
$idparada = $_POST['idparada'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Inserta el recorrido en la tabla correspondiente
$sql = "INSERT INTO recorrido (idchofer, idvehiculo, fecha, hora, idparada)
VALUES ('$idchofer', '$idvehiculo', '$fecha', '$hora', '$idparada')";

if(mysqli_query($conexion, $sql)){
    $mensaje = "Recorrido agregado correctamente";
    $error = false;
} else {
    $mensaje = "Error: " . mysqli_error($conexion);
    $error = true;
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- Codificación -->
    <title>Resultado Adición</title>
</head>

<style>
    /* Estilos para el mensaje de resultado */
    body {
        background: linear-gradient(135deg, #ec2bec, #0b00a1);
    }
    .mensaje {
        width: 60%;
        margin: 50px auto;
        padding: 20px;
        text-align: center;
        font-size: 18px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .exito {
        background: #28a745;
        color: white;
    }

    .error {
        background: #dc3545;
        color: white;
    }

    /* Botón para volver */
    .boton-volver {
        text-align: center;
        margin-top: 20px;
    }

    .boton-volver button {
        background: #0088ff;
        color: white;
        padding: 12px 25px;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .boton-volver button:hover {
        background: #005fcc;
    }
</style>

<body>

    <!-- Muestra el resultado de la operación: mensaje y estado (éxito/error) -->
    <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>">
        <?php echo $mensaje; ?>
    </div>

    <div class="boton-volver">
        <button onclick="window.location.href='index.php'">Volver al Inicio</button>
    </div>

</body>

</html>