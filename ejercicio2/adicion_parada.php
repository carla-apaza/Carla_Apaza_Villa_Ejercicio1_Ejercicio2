<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agregar Parada</title>
    <link rel="stylesheet" href="style.css">

<script>
function validarParada() {
    let punto = document.getElementById("punto").value.trim();

    if (punto === "") {
        alert("Debe ingresar un punto de parada");
        return false;
    }
    return true;
}
</script>

</head>
<body>

<h2>Agregar Parada</h2>

<form action="adicion_parada2.php" method="post" onsubmit="return validarParada()">

    Punto de parada:<br>
    <input type="text" id="punto" name="punto" required><br><br>

    Descripción:<br>
    <textarea name="descripcion" required></textarea><br><br>

    <input type="submit" value="Guardar">
</form>

</body>
</html>
