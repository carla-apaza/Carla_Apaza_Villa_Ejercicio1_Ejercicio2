<?php
include("conectar.php");

$id = $_GET['id'];

$sql = "SELECT * FROM parada WHERE idparada='$id'";
$res = mysqli_query($conexion, $sql);

if ($row = mysqli_fetch_assoc($res)) {
    echo json_encode($row);
} else {
    echo json_encode(["error" => true]);
}
?>
