<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adición</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>

    <!-- FORMULARIO PERSONA -->
    <form action="adicion2.php" method="post">
        <h3>Adicionar PERSONA</h3>

        IDPERSONA: <input type="text" name="idpers"><br><br>
        NOMBRE: <input type="text" name="nom"><br><br>
        APELLIDO PATERNO: <input type="text" name="pat"><br><br>
        APELLIDO MATERNO: <input type="text" name="mat"><br><br>
        FECHA NACIMIENTO: <input type="date" name="fecnac"><br><br>

        <input type="submit" value="Adicionar Persona">
    </form>

    <br><br><hr><br>

    <!-- FORMULARIO AGENDACIÓN -->
    <form action="adicion2.php" method="post">
        <h3>Adicionar AGENDA</h3>

        IDAGENDACION: <input type="text" name="idagen"><br><br>
        FECHA: <input type="date" name="fec"><br><br>
        HORA: <input type="time" name="hor"><br><br>
        ACTIVIDAD: <input type="text" name="act"><br><br>

        COMPLETADO:
        <select name="comp">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
        <br><br>

        <input type="submit" value="Adicionar Agenda">
    </form>

</center>
</body>
</html>
