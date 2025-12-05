<!DOCTYPE html> <!-- Declara el tipo de documento como HTML5 -->
<html> <!-- Inicio del documento HTML -->
<head> <!-- Metadatos y enlaces -->
    <meta charset="utf-8"> <!-- Codificación UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Hace la página responsiva -->
    <title>Modificación</title> <!-- Título de la página -->
    <link rel="stylesheet" href="style.css"> <!-- Vincula la hoja de estilos -->
</head>
<body> <!-- Inicio del contenido visible -->
<center> <!-- Centra el contenido (uso simple para maquetado) -->

    <!-- FORMULARIO MODIFICAR PERSONA --> <!-- Formulario para modificar datos de una persona -->
    <form action="modificacion2.php" method="POST"> <!-- Envía por POST a `modificacion2.php` -->
        <h2>Modificar registro de PERSONA</h2>

        ID PERSONA: <input type="number" name="idp"> <!-- Campo numérico para el ID de la persona -->
        <br><br>
        NOMBRE: <input type="text" name="nom"> <!-- Campo de texto para el nombre -->
        <br><br>
        PATERNO: <input type="text" name="pat"> <!-- Campo para apellido paterno -->
        <br><br>
        MATERNO: <input type="text" name="mat"> <!-- Campo para apellido materno -->
        <br><br>
        FECHA NACIMIENTO: <input type="date" name="fecnac"> <!-- Campo de fecha para nacimiento -->
        <br><br>

        <input type="submit" value="Modificar Persona"> <!-- Botón para enviar el formulario -->
    </form>

    <br><hr><br> <!-- Separador visual -->

    <!-- FORMULARIO MODIFICAR AGENDA --> <!-- Formulario para modificar una agendación -->
    <form action="modificacion2.php" method="POST"> <!-- Envía por POST a `modificacion2.php` -->
        <h2>Modificar registro de AGENDA</h2>

        ID AGENDA: <input type="number" name="idag"> <!-- Campo numérico para ID de agenda -->
        <br><br>
        FECHA: <input type="date" name="fec"> <!-- Campo de fecha -->
        <br><br>
        HORA: <input type="time" name="hor"> <!-- Campo de hora -->
        <br><br>
        ACTIVIDAD: <input type="text" name="act"> <!-- Campo de texto para la actividad -->
        <br><br>

        COMPLETADO: <!-- Etiqueta para estado de completado -->
        <select name="comp"> <!-- Menú para seleccionar si la tarea está completada -->
            <option value="si">SI</option>
            <option value="no">NO</option>
        </select>
        <br><br>

        <input type="submit" value="Modificar Agenda"> <!-- Botón para enviar el formulario de agenda -->
    </form>

</center> <!-- Fin del centrado -->
</body> <!-- Fin del cuerpo -->
</html> <!-- Fin del documento -->
