<!DOCTYPE html> <!-- Declara HTML5 -->
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos -->
</head>
<body>

<div class="contenedor"> <!-- Contenedor del formulario -->
    <h2>Agregar Vehículo</h2>

    <!-- Formulario para agregar un vehículo: envía por POST a `adicion_vehiculo2.php` -->
    <form action="adicion_vehiculo2.php" method="POST" onsubmit="return validarVehiculo();">

        <input type="text" name="placa" id="placa" placeholder="Placa"> <!-- Placa del vehículo -->
        <input type="text" name="color" id="color" placeholder="Color"> <!-- Color -->
        <input type="text" name="modelo" id="modelo" placeholder="Modelo"> <!-- Modelo -->
        <input type="text" name="tipo" id="tipo" placeholder="Tipo"> <!-- Tipo de vehículo -->

        <button type="submit">Guardar Vehículo</button> <!-- Enviar formulario -->
    </form>
</div>

<script>
// Validación en cliente para asegurar que no haya campos vacíos
function validarVehiculo(){
    let p = placa.value.trim();
    let c = color.value.trim();
    let m = modelo.value.trim();
    let t = tipo.value.trim();

    if(p==="" || c==="" || m==="" || t===""){
        alert("Llene todos los campos del vehículo");
        return false;
    }
    return true;
}
</script>

</body>
</html>
