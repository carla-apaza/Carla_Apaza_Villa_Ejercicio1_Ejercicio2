<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>

    <!-- FORMULARIO MODIFICAR PERSONA -->
    <form action="modificacion2.php" method="POST">
        <h2>Modificar registro de PERSONA</h2>

        ID PERSONA: <input type="number" name="idp"><br><br>
        NOMBRE: <input type="text" name="nom"><br><br>
        PATERNO: <input type="text" name="pat"><br><br>
        MATERNO: <input type="text" name="mat"><br><br>
        FECHA NACIMIENTO: <input type="date" name="fecnac"><br><br>

        <input type="submit" value="Modificar Persona">
    </form>

    <br><hr><br>

    <!-- FORMULARIO MODIFICAR AGENDA -->
    <form action="modificacion2.php" method="POST">
        <h2>Modificar registro de AGENDA</h2>

        ID AGENDA: <input type="number" name="idag"><br><br>
        FECHA: <input type="date" name="fec"><br><br>
        HORA: <input type="time" name="hor"><br><br>
        ACTIVIDAD: <input type="text" name="act"><br><br>

        COMPLETADO:
        <select name="comp">
            <option value="si">SI</option>
            <option value="no">NO</option>
        </select>
        <br><br>

        <input type="submit" value="Modificar Agenda">
    </form>

</center>
</body>
</html>
