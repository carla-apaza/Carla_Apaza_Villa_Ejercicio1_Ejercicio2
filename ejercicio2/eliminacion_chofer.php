<!DOCTYPE html> <!-- Declara HTML5 -->
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos -->
</head>
<body>

<div class="contenedor"> <!-- Contenedor del formulario -->
    <h2>Eliminar Chofer</h2>

    <!-- Formulario para eliminar un chofer por ID -->
    <form action="eliminacion_chofer2.php" method="POST" onsubmit="return validar();">

        <input type="number" name="idchofer" id="idchofer" placeholder="ID de Chofer"> <!-- Campo para el ID -->

        <button type="submit">Eliminar</button> <!-- Botón de envío -->
    </form>
</div>

<script>
// Validación en cliente para evitar enviar formulario vacío
function validar(){
    if(idchofer.value.trim()===""){
        alert("Ingrese el ID del chofer");
        return false;
    }
    return true;
}
</script>

</body>
</html>
