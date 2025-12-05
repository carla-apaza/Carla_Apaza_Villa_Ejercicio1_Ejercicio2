<!DOCTYPE html> <!-- Declara HTML5 -->
<html>
<head>
    <meta charset="utf-8"> <!-- Codificación -->
    <title>Eliminar Parada</title> <!-- Título de la página -->
    <link rel="stylesheet" href="style.css"> <!-- Hoja de estilos -->

<script>
// Valida que el ID ingresado sea un número válido antes de enviar
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

<!-- Formulario que envía el ID de la parada a eliminar mediante POST a `eliminar_parada2.php` -->
<form action="eliminar_parada2.php" method="post" onsubmit="return validarEliminar()">
    ID de Parada:<br>
    <input type="number" id="idparada" name="idparada" required> <!-- Campo para el ID -->
    <br><br>

    <input type="submit" value="Eliminar"> <!-- Botón de envío -->
</form>

</body>
</html>
