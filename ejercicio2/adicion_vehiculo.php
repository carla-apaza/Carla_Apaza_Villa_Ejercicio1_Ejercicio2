<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Agregar Vehículo</h2>

    <form action="adicion_vehiculo2.php" method="POST" onsubmit="return validarVehiculo();">

        <input type="text" name="placa" id="placa" placeholder="Placa">
        <input type="text" name="color" id="color" placeholder="Color">
        <input type="text" name="modelo" id="modelo" placeholder="Modelo">
        <input type="text" name="tipo" id="tipo" placeholder="Tipo">

        <button type="submit">Guardar Vehículo</button>
    </form>
</div>

<script>
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
