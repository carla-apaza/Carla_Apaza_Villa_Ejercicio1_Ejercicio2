<!DOCTYPE html> <!-- Declara HTML5 -->
<html>
<head>
    <meta charset="utf-8"> <!-- Codificación UTF-8 -->
    <title>Agregar Parada</title> <!-- Título de la página -->
    <link rel="stylesheet" href="style.css"> <!-- Hoja de estilos -->

<script>
// Valida en el cliente que el campo 'punto' no esté vacío antes de enviar
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

<h2>Agregar Parada</h2> <!-- Encabezado del formulario -->

<form action="adicion_parada2.php" method="post" onsubmit="return validarParada()"> <!-- Envía por POST a `adicion_parada2.php` -->

    Punto de parada:<br>
    <input type="text" id="punto" name="punto" required> <!-- Campo de texto para el punto de parada -->
    <br><br>

    Descripción:<br>
    <textarea name="descripcion" required></textarea> <!-- Área para descripción -->
    <br><br>

    <input type="submit" value="Guardar"> <!-- Botón de envío -->
</form>

</body>
</html>
