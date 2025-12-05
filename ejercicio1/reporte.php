<?php
    include("conectar.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporte</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>

    <h2>REPORTE DE PERSONAS</h2>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Paterno</td>
            <td>Materno</td>
            <td>Fecha Nacimiento</td>
        </tr>
        <?php
        $ls = "SELECT * FROM persona";
        $res = mysqli_query($conexion, $ls);

        while ($r = mysqli_fetch_array($res)) {
        ?>
        <tr>
            <td><?php echo $r['idpersona']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['paterno']; ?></td>
            <td><?php echo $r['materno']; ?></td>
            <td><?php echo $r['fechanacimiento']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <br><br><hr><br>

    <h2>REPORTE DE AGENDAS</h2>
    <table border="2">
        <tr>
            <td>ID Agenda</td>
            <td>Fecha</td>
            <td>Hora</td>
            <td>Actividad</td>
            <td>Completado</td>
        </tr>
        <?php
        $lis = "SELECT * FROM agendacion";
        $res2 = mysqli_query($conexion, $lis);

        while ($r2 = mysqli_fetch_array($res2)) {
        ?>
        <tr>
            <td><?php echo $r2['idagendacion']; ?></td>
            <td><?php echo $r2['fecha']; ?></td>
            <td><?php echo $r2['hora']; ?></td>
            <td><?php echo $r2['actividad']; ?></td>
            <td><?php echo $r2['completado']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

</center>
</body>
</html>
