<!DOCTYPE html> <!-- Declara HTML5 -->
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos -->
</head>
<body>

<div class="contenedor"> <!-- Contenedor del formulario -->
    <h2>Eliminar Vehículo</h2>

    <!-- Formulario que envía el ID del vehículo a `eliminacion_vehiculo2.php` -->
    <form action="eliminacion_vehiculo2.php" method="POST" onsubmit="return validar();">

        <input type="number" name="idvehiculo" id="idvehiculo" placeholder="ID del Vehículo"> <!-- Campo para ID -->

        <button type="submit">Eliminar</button> <!-- Botón de envío -->
    </form>
</div>

<script>
// Validación en el cliente para evitar envíos vacíos
function validar(){
    if(idvehiculo.value.trim()===""){
        alert("Ingrese el ID del vehículo");
        return false;
    }
    return true;
}
</script>

</body>
</html>
