<?php include("conectar.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos -->
</head>
<body>

<div class="contenedor"> <!-- Contenedor del formulario -->
    <h2>Modificar Vehículo</h2>

    <!-- Formulario para modificar los datos de un vehículo por su ID -->
    <form action="modificar_vehiculo2.php" method="POST" onsubmit="return validar();">

        <input type="number" name="idvehiculo" id="idvehiculo" placeholder="ID Vehículo"> <!-- ID del vehículo -->

        <input type="text" name="placa" id="placa" placeholder="Nueva placa"> <!-- Nuevos datos -->
        <input type="text" name="color" id="color" placeholder="Nuevo color">
        <input type="text" name="modelo" id="modelo" placeholder="Nuevo modelo">
        <input type="text" name="tipo" id="tipo" placeholder="Nuevo tipo">

        <button type="submit">Modificar</button>

    </form>
</div>

<script>
// Validación en cliente: comprueba ID y que los campos no estén vacíos
function validar(){
    if(idvehiculo.value===""){
        alert("Ingrese ID de vehículo");
        return false;
    }
    if(placa.value==="" || color.value==="" || modelo.value==="" || tipo.value===""){
        alert("Complete todos los campos");
        return false;
    }
    return true;
}
</script>

</body>
</html>
