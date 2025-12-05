<?php include("conectar.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos -->
</head>
<body>

<div class="contenedor">
    <h2>Eliminar Recorrido</h2>

    <!-- Formulario que permite seleccionar un recorrido existente para eliminarlo -->
    <form action="eliminacion_recorrido2.php" method="POST" onsubmit="return validar();">

        <select name="idrecorrido" id="idrecorrido">
            <option value="">Seleccione un recorrido</option>

            <?php
            // Consulta que obtiene información combinada del recorrido, chofer, vehículo y parada
            $res = mysqli_query($conexion, "
                SELECT r.idrecorrido, c.nombrecompleto, v.placa, p.puntoparada
                FROM recorrido r
                JOIN chofer c ON r.idchofer=c.idchofer
                JOIN vehiculo v ON r.idvehiculo=v.idvehiculo
                JOIN parada p ON r.idparada=p.idparada
            ");

            // Genera las opciones del select con los datos obtenidos
            while($r = mysqli_fetch_assoc($res)){
                echo "<option value='".$r['idrecorrido']."'>
                        ID ". $r['idrecorrido'] ." - " . $r['nombrecompleto'] ." / " . $r['placa'] ." / " . $r['puntoparada'] ."
                      </option>";
            }
            ?>
        </select>

        <button type="submit">Eliminar</button>

    </form>
</div>

<script>
// Validación en cliente para asegurarse de que se seleccionó un recorrido
function validar(){
    if(idrecorrido.value===""){
        alert("Seleccione un recorrido para eliminar");
        return false;
    }
    return true;
}
</script>

</body>
</html>
