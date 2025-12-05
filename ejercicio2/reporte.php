<?php
include("conectar.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reporte General</title>
    <link rel="stylesheet" href="style.css">
</head>


<style>
    /* Body general */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #ec2bec, #0b00a1);
        color: #fff;
    }

    /* Título principal */
    h2 {
        text-align: center;
        background: #7940ff;
        color: white;
        padding: 15px;
        border-radius: 8px;
        width: 60%;
        margin: 20px auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    /* Subtítulos de secciones */
    h3 {
        text-align: center;
        background: #f09a1b;
        color: #000;
        padding: 10px;
        border-radius: 6px;
        width: 50%;
        margin: 15px auto;
    }

    /* Tabla general */
    table {
        width: 80%;
        margin: 15px auto 40px auto;
        border-collapse: collapse;
        background: rgba(255, 255, 255, 0.9);
        color: #000;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Encabezados de tabla */
    th {
        background: #0088ff;
        color: white;
        padding: 10px;
        text-align: center;
    }

    /* Celdas de tabla */
    td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    /* Filas alternadas */
    tr:nth-child(even) {
        background: rgba(0, 0, 0, 0.05);
    }

    /* Hover sobre fila */
    tr:hover {
        background: rgba(0, 136, 255, 0.2);
    }

    /* Links de menú o botones (si se usan) */
    a {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        background: #00bfff;
        color: #000;
        text-decoration: none;
        border-radius: 6px;
        transition: background 0.3s;
    }

    a:hover {
        background: #500091;
        color: #fff;
    }

    /* Centrar todo */
    center {
        width: 100%;
    }
</style>

<body>

    <center>

        <h2>REPORTE GENERAL DEL SISTEMA</h2>

        <!-- CHOFERES -->
        <h3>Lista de Choferes</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
            </tr>

            <?php
            $sql = "SELECT * FROM chofer";
            $res = mysqli_query($conexion, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
        <td>{$row['idchofer']}</td>
        <td>{$row['nombrecompleto']}</td>
    </tr>";
            }
            ?>
        </table>


        <!-- VEHÍCULOS -->
        <h3>Lista de Vehículos</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>Tipo</th>
            </tr>

            <?php
            $sql = "SELECT * FROM vehiculo";
            $res = mysqli_query($conexion, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
        <td>{$row['idvehiculo']}</td>
        <td>{$row['placa']}</td>
        <td>{$row['color']}</td>
        <td>{$row['modelo']}</td>
        <td>{$row['tipo']}</td>
    </tr>";
            }
            ?>
        </table>


        <!-- PARADAS -->
        <h3>Lista de Paradas</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Punto</th>
                <th>Descripción</th>
            </tr>

            <?php
            $sql = "SELECT * FROM parada";
            $res = mysqli_query($conexion, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
        <td>{$row['idparada']}</td>
        <td>{$row['puntoparada']}</td>
        <td>{$row['descripcion']}</td>
    </tr>";
            }
            ?>
        </table>


        <!-- RECORRIDOS -->
        <h3>Lista de Recorridos</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Chofer</th>
                <th>Vehículo</th>
                <th>Parada</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>

            <?php
            $sql = "SELECT r.idrecorrido, c.nombrecompleto, v.placa, p.puntoparada, r.fecha, r.hora
        FROM recorrido r
        JOIN chofer c ON r.idchofer=c.idchofer
        JOIN vehiculo v ON r.idvehiculo=v.idvehiculo
        JOIN parada p ON r.idparada=p.idparada";

            $res = mysqli_query($conexion, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
        <td>{$row['idrecorrido']}</td>
        <td>{$row['nombrecompleto']}</td>
        <td>{$row['placa']}</td>
        <td>{$row['puntoparada']}</td>
        <td>{$row['fecha']}</td>
        <td>{$row['hora']}</td>
    </tr>";
            }
            ?>
        </table>
    </center>
</body>

</html>