<?php
// Incluye la conexión a la base de datos
include("conectar.php");

// Lee el ID del chofer enviado por POST
$id = $_POST['idchofer'];

// Construye la consulta DELETE y la ejecuta
$sql = "DELETE FROM chofer WHERE idchofer='$id'";

if(mysqli_query($conexion, $sql)){
    echo ""; // Sin salida en caso de éxito (mantener comportamiento original)
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- Codificación -->
    <title>Resultado Adición</title> <!-- Título -->
</head>

<style>
    /* Estilos para mensaje de resultado */
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

    <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>">
        <?php echo "Chofer eliminado"; ?>
    </div>

    <div class="boton-volver">
        <button onclick="window.location.href='index.php'">Volver al Inicio</button>
    </div>

</body>

</html>