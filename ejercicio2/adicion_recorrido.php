<?php include("conectar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos -->
</head>
<body>

<div class="contenedor"> <!-- Contenedor del formulario -->
    <h2>Agregar Recorrido</h2>

    <!-- Formulario para agregar un recorrido: se seleccionan chofer, vehículo y parada -->
    <form action="adicion_recorrido2.php" method="POST" onsubmit="return validarRecorrido();">

        <!-- CHOFER: carga dinámicamente desde la tabla 'chofer' -->
        <select name="idchofer" id="idchofer">
            <option value="">Seleccione chofer</option>
            <?php
            $res = mysqli_query($conexion, "SELECT * FROM chofer");
            while($r = mysqli_fetch_assoc($res)){
                echo "<option value='".$r['idchofer']."'>".$r['nombrecompleto']."</option>";
            }
            ?>
        </select>

        <!-- VEHICULO: carga desde la tabla 'vehiculo' -->
        <select name="idvehiculo" id="idvehiculo">
            <option value="">Seleccione vehículo</option>
            <?php
            $res = mysqli_query($conexion, "SELECT * FROM vehiculo");
            while($r = mysqli_fetch_assoc($res)){
                echo "<option value='".$r['idvehiculo']."'>".$r['placa']." - ". $r['modelo'] ."</option>";
            }
            ?>
        </select>

        <!-- PARADA: carga desde la tabla 'parada' -->
        <select name="idparada" id="idparada">
            <option value="">Seleccione parada</option>
            <?php
            $res = mysqli_query($conexion, "SELECT * FROM parada");
            while($r = mysqli_fetch_assoc($res)){
                echo "<option value='".$r['idparada']."'>".$r['puntoparada']."</option>";
            }
            ?>
        </select>

        <input type="date" name="fecha" id="fecha"> <!-- Fecha del recorrido -->
        <input type="time" name="hora" id="hora"> <!-- Hora del recorrido -->

        <button type="submit">Guardar Recorrido</button>

    </form>
</div>

<script>
// Validación cliente para asegurar que todos los campos estén completos
function validarRecorrido(){
    if(idchofer.value=="" || idvehiculo.value=="" || idparada.value=="" || fecha.value=="" || hora.value==""){
        alert("Complete todos los campos del recorrido");
        return false;
    }
    return true;
}
</script>

</body>
</html>
