<?php include("conectar.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Modificar Recorrido</h2>

    <form action="modificar_recorrido2.php" method="POST" onsubmit="return validar();">

        <!-- Seleccionar recorrido -->
        <select id="idrecorrido" name="idrecorrido" onchange="cargarDatos()">
            <option value="">Seleccione recorrido</option>

            <?php
            $res = mysqli_query($conexion,"
                SELECT r.idrecorrido, c.nombrecompleto, v.placa, p.puntoparada, r.fecha, r.hora
                FROM recorrido r
                JOIN chofer c ON r.idchofer=c.idchofer
                JOIN vehiculo v ON r.idvehiculo=v.idvehiculo
                JOIN parada p ON r.idparada=p.idparada
            ");

            while($r = mysqli_fetch_assoc($res)){
                $info = $r['fecha']."|".$r['hora'];
                echo "<option value='".$r['idrecorrido']."' data-info='".$info."'>
                        ID ".$r['idrecorrido']." - ".$r['nombrecompleto']." / ".$r['placa']." / ".$r['puntoparada']."
                      </option>";
            }
            ?>
        </select>

        <!-- Fecha y hora -->
        <input type="date" name="fecha" id="fecha">
        <input type="time" name="hora" id="hora">

        <button type="submit">Modificar</button>

    </form>
</div>

<script>
function cargarDatos(){
    let op = document.getElementById("idrecorrido").selectedOptions[0];
    let info = op.getAttribute("data-info");

    if(info){
        let datos = info.split("|");
        document.getElementById("fecha").value = datos[0];
        document.getElementById("hora").value = datos[1];
    }
}

function validar(){
    if(idrecorrido.value===""){
        alert("Seleccione un recorrido");
        return false;
    }
    if(fecha.value==="" || hora.value===""){
        alert("Complete fecha y hora");
        return false;
    }
    return true;
}
</script>

</body>
</html>
