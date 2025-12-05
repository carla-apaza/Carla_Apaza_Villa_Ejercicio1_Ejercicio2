<?php
    // Incluye la conexión a la base de datos
    include("conectar.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> <!-- Codificación UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive -->
    <title>Reporte</title> <!-- Título de la página -->
    <link rel="stylesheet" href="style.css"> <!-- Hoja de estilos -->
    </head>
<body>
<center>

    <h2>REPORTE DE PERSONAS</h2> <!-- Encabezado para la tabla de personas -->
    <table border="2"> <!-- Tabla de personas -->
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Paterno</td>
            <td>Materno</td>
            <td>Fecha Nacimiento</td>
        </tr>
        <?php
        // Consulta para obtener todas las personas
        $ls = "SELECT * FROM persona";
        $res = mysqli_query($conexion, $ls);

        // Recorre cada fila resultante y la imprime en la tabla
        while ($r = mysqli_fetch_array($res)) {
        ?>
        <tr>
            <td><?php echo $r['idpersona']; ?></td> <!-- Muestra el id de la persona -->
            <td><?php echo $r['nombre']; ?></td> <!-- Muestra el nombre -->
            <td><?php echo $r['paterno']; ?></td> <!-- Muestra apellido paterno -->
            <td><?php echo $r['materno']; ?></td> <!-- Muestra apellido materno -->
            <td><?php echo $r['fechanacimiento']; ?></td> <!-- Muestra fecha de nacimiento -->
        </tr>
        <?php
        }
        ?>
    </table>

    <br><br><hr><br>

    <h2>REPORTE DE AGENDAS</h2> <!-- Encabezado para la tabla de agendaciones -->
    <table border="2"> <!-- Tabla de agendaciones -->
        <tr>
            <td>ID Agenda</td>
            <td>Fecha</td>
            <td>Hora</td>
            <td>Actividad</td>
            <td>Completado</td>
        </tr>
        <?php
        // Consulta para obtener todas las agendaciones
        $lis = "SELECT * FROM agendacion";
        $res2 = mysqli_query($conexion, $lis);

        // Recorre los resultados y los imprime
        while ($r2 = mysqli_fetch_array($res2)) {
        ?>
        <tr>
            <td><?php echo $r2['idagendacion']; ?></td> <!-- ID de la agenda -->
            <td><?php echo $r2['fecha']; ?></td> <!-- Fecha -->
            <td><?php echo $r2['hora']; ?></td> <!-- Hora -->
            <td><?php echo $r2['actividad']; ?></td> <!-- Actividad -->
            <td><?php echo $r2['completado']; ?></td> <!-- Estado completado -->
        </tr>
        <?php
        }
        ?>
    </table>

</center>
</body>
</html>
