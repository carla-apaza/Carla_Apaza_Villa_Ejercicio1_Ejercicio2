<!DOCTYPE html> <!-- Declara el tipo de documento como HTML5 -->
<html> <!-- Inicio del documento HTML -->
<head> <!-- Metadatos y enlaces -->
    <meta charset="utf-8"> <!-- Codificación UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Hace la página responsiva -->
    <title>Eliminación</title> <!-- Título de la página -->
    <link rel="stylesheet" href="style.css"> <!-- Vincula la hoja de estilos `style.css` -->
</head>
<body> <!-- Inicio del contenido visible -->
<center> <!-- Centra el contenido (etiqueta simple para maquetado) -->

    <!-- ELIMINAR PERSONA --> <!-- Inicio del formulario para eliminar una persona -->
    <form action="eliminacion2.php" method="post"> <!-- Envía por POST a `eliminacion2.php` -->
        <h2>Eliminar PERSONA</h2> <!-- Título del formulario -->
        Ingrese ID Persona: 
        <input type="number" name="idp"> <!-- Campo numérico para el ID de la persona -->
        <br><br>
        <input type="submit" value="Eliminar Persona"> <!-- Botón para enviar el formulario -->
    </form>

    <br><hr><br> <!-- Separador visual entre formularios -->

    <!-- ELIMINAR AGENDA --> <!-- Inicio del formulario para eliminar una agendación -->
    <form action="eliminacion2.php" method="post"> <!-- Envía por POST a `eliminacion2.php` -->
        <h2>Eliminar AGENDA</h2> <!-- Título del formulario -->
        Ingrese ID Agenda: 
        <input type="number" name="idag"> <!-- Campo numérico para el ID de la agenda -->
        <br><br>
        <input type="submit" value="Eliminar Agenda"> <!-- Botón para enviar el formulario -->
    </form>

</center> <!-- Fin del centrado -->
</body> <!-- Fin del cuerpo -->
</html> <!-- Fin del documento -->
