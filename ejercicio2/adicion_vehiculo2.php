<?php
include("conectar.php");

$placa = $_POST['placa'];
$color = $_POST['color'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO vehiculo (placa, color, modelo, tipo)
VALUES ('$placa', '$color', '$modelo', '$tipo')";

if(mysqli_query($conexion, $sql)){
    echo "";
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Resultado Adición</title>
</head>

<style>
    /* Mensajes de éxito o error */
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

    /* Botón bonito para volver */
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
        <?php echo "Vehículo agregado correctamente"; ?>
    </div>

    <div class="boton-volver">
        <button onclick="window.location.href='index.php'">Volver al Inicio</button>
    </div>

</body>

</html>