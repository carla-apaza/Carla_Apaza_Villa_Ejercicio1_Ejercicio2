<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Eliminar Vehículo</h2>

    <form action="eliminacion_vehiculo2.php" method="POST" onsubmit="return validar();">

        <input type="number" name="idvehiculo" id="idvehiculo" placeholder="ID del Vehículo">

        <button type="submit">Eliminar</button>
    </form>
</div>

<script>
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
