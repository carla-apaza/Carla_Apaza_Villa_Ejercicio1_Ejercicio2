<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modificar Parada</title>
    <link rel="stylesheet" href="style.css">

<script>
// Buscar parada automáticamente
function buscarParada() {
    let id = document.getElementById("idparada").value;

    if (id.trim() === "") return;

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "buscar_parada.php?id=" + id, true);

    xhr.onload = function() {
        if (this.status == 200) {
            let datos = JSON.parse(this.responseText);

            if (datos.error) {
                alert("No existe la parada");
                return;
            }

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

<form action="modificar_parada2.php" method="post">

    ID Parada:<br>
    <input type="number" id="idparada" name="idparada" onblur="buscarParada()" required><br><br>

    Punto de parada:<br>
    <input type="text" id="puntoparada" name="puntoparada" required><br><br>

    Descripción:<br>
    <textarea id="descripcion" name="descripcion" required></textarea><br><br>

    <input type="submit" value="Guardar Cambios">
</form>

</body>
</html>
