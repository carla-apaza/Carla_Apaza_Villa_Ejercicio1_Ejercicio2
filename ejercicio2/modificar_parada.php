<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> <!-- Codificación -->
    <title>Modificar Parada</title>
    <link rel="stylesheet" href="style.css"> <!-- Hoja de estilos -->

<script>
// Buscar parada automáticamente usando AJAX
function buscarParada() {
    let id = document.getElementById("idparada").value;

    if (id.trim() === "") return; // Si no hay id, no hace la petición

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "buscar_parada.php?id=" + id, true);

    xhr.onload = function() {
        if (this.status == 200) {
            let datos = JSON.parse(this.responseText);

            if (datos.error) {
                alert("No existe la parada");
                return;
            }

            // Completa los campos del formulario con los datos recibidos
            document.getElementById("puntoparada").value = datos.puntoparada;
            document.getElementById("descripcion").value = datos.descricpion;
        }
    };

    xhr.send();
}
</script>

</head>
<body>

<h2>Modificar Parada</h2>

<!-- Formulario para modificar una parada. Al perder foco en el ID se intentan cargar los datos -->
<form action="modificar_parada2.php" method="post">

    ID Parada:<br>
    <input type="number" id="idparada" name="idparada" onblur="buscarParada()" required> <!-- Al salir del input se llama a buscarParada() -->
    <br><br>

    Punto de parada:<br>
    <input type="text" id="puntoparada" name="puntoparada" required> <!-- Campo para el nombre del punto -->
    <br><br>

    Descripción:<br>
    <textarea id="descripcion" name="descripcion" required></textarea> <!-- Campo para la descripción -->
    <br><br>

    <input type="submit" value="Guardar Cambios"> <!-- Botón para enviar la modificación -->
</form>

</body>
</html>
