<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eliminar Parada</title>
    <link rel="stylesheet" href="style.css">

<script>
function validarEliminar() {
    let id = document.getElementById("idparada").value;

    if (id === "" || id <= 0) {
        alert("Ingrese un ID de parada válido");
        return false;
    }
    return true;
}
</script>

</head>
<body>

<h2>Eliminar Parada</h2>

<form action="eliminar_parada2.php" method="post" onsubmit="return validarEliminar()">
    ID de Parada:<br>
    <input type="number" id="idparada" name="idparada" required><br><br>

    <input type="submit" value="Eliminar">
</form>

</body>
</html>
