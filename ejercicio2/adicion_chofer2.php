
<?php
// Incluye la conexión a la base de datos
include("conectar.php");

// Lee el nombre completo enviado por POST
$nombre = $_POST['nombrecompleto'];

// Inserta el nuevo chofer en la tabla 'chofer'
$sql = "INSERT INTO chofer (nombrecompleto) VALUES ('$nombre')";

// Ejecuta la consulta; mantiene la lógica original (no se altera el flujo)
if(mysqli_query($conexion, $sql)){
    // No se imprime nada en caso de éxito (el HTML abajo mostrará un mensaje estático)
    echo "";
} else {
    // En caso de error muestra el mensaje de MySQL
    echo "Error: " . mysqli_error($conexion);
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- Codificación -->
    <title>Resultado Adición</title> <!-- Título de la página de resultado -->
</head>

<style>
    /* Estilos para los mensajes */
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

    <!-- Mensaje de confirmación estático: no se calcula $error en este archivo, se mantiene diseño original -->
    <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>">
        <?php echo "Chofer agregado correctamente"; ?>
    </div>

    <!-- Botón para volver al índice -->
    <div class="boton-volver">
        <button onclick="window.location.href='index.php'">Volver al Inicio</button>
    </div>

</body>

</html>