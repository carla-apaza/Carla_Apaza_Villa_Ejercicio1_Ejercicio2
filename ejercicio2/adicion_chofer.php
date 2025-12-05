<!DOCTYPE html> <!-- Declara HTML5 -->
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos específica -->
</head>
<body>

<div class="contenedor"> <!-- Contenedor principal -->
    <h2>Agregar Chofer</h2> <!-- Título del formulario -->

    <!-- Formulario que envía por POST a `adicion_chofer2.php`; se valida en cliente antes -->
    <form action="adicion_chofer2.php" method="POST" onsubmit="return validarChofer();">
        <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nombre completo"> <!-- Campo para nombre completo -->
        <button type="submit">Guardar Chofer</button> <!-- Botón de envío -->
    </form>
</div>

<script>
// Función de validación en el cliente para evitar envíos vacíos
function validarChofer(){
    let nom = document.getElementById("nombrecompleto").value;
    if(nom.trim() === ""){
        alert("Ingrese el nombre completo del chofer");
        return false;
    }
    return true;
}
</script>

</body>
</html>
