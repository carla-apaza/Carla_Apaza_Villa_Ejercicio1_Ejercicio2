<?php
// Incluye la conexión a la base de datos
include("conectar.php");

// Lee el id pasado por GET (por ejemplo: buscar_parada.php?id=3)
$id = $_GET['id'];

// Consulta para obtener la parada por su id
$sql = "SELECT * FROM parada WHERE idparada='$id'";
$res = mysqli_query($conexion, $sql);

// Si encuentra la fila, la devuelve como JSON; si no, devuelve un objeto de error
if ($row = mysqli_fetch_assoc($res)) {
    echo json_encode($row);
} else {
    echo json_encode(["error" => true]);
}
?>
