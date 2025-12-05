<?php include("conectar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Agregar Recorrido</h2>

    <form action="adicion_recorrido2.php" method="POST" onsubmit="return validarRecorrido();">

        <!-- CHOFER -->
        <select name="idchofer" id="idchofer">
            <option value="">Seleccione chofer</option>
            <?php
            $res = mysqli_query($conexion, "SELECT * FROM chofer");
            while($r = mysqli_fetch_assoc($res)){
                echo "<option value='".$r['idchofer']."'>".$r['nombrecompleto']."</option>";
            }
            ?>
        </select>

        <!-- VEHICULO -->
        <select name="idvehiculo" id="idvehiculo">
            <option value="">Seleccione vehículo</option>
            <?php
            $res = mysqli_query($conexion, "SELECT * FROM vehiculo");
            while($r = mysqli_fetch_assoc($res)){
                echo "<option value='".$r['idvehiculo']."'>".$r['placa']." - ".$r['modelo']."</option>";
            }
            ?>
        </select>

        <!-- PARADA -->
        <select name="idparada" id="idparada">
            <option value="">Seleccione parada</option>
            <?php
            $res = mysqli_query($conexion, "SELECT * FROM parada");
            while($r = mysqli_fetch_assoc($res)){
                echo "<option value='".$r['idparada']."'>".$r['puntoparada']."</option>";
            }
            ?>
        </select>

        <input type="date" name="fecha" id="fecha">
        <input type="time" name="hora" id="hora">

        <button type="submit">Guardar Recorrido</button>

    </form>
</div>

<script>
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
