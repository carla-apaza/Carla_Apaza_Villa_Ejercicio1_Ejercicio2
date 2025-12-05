<!DOCTYPE html> <!-- Declara el tipo de documento como HTML5 -->
<html> <!-- Inicio del documento HTML -->
<head> <!-- Inicio de la sección de metadatos y enlaces -->
    <meta charset="utf-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Hace la página responsiva en móviles -->
    <title>Adición</title> <!-- Título que aparece en la pestaña del navegador -->
    <link rel="stylesheet" href="style.css"> <!-- Vincula la hoja de estilos externa `style.css` -->
</head> <!-- Fin de la sección head -->
<body> <!-- Inicio del cuerpo visible de la página -->
<center> <!-- Centra el contenido (etiqueta obsoleta en HTML5, pero usada aquí para diseño simple) -->

    <!-- FORMULARIO PERSONA --> <!-- Comentario indicando inicio del formulario para PERSONA -->
    <form action="adicion2.php" method="post"> <!-- Formulario que envía datos mediante POST a `adicion2.php` -->
        <h3>Adicionar PERSONA</h3> <!-- Encabezado pequeño que indica la acción del formulario -->

        IDPERSONA: <input type="text" name="idpers"> <!-- Campo de texto para el identificador de la persona, atributo `name` usado en el POST -->
        <br><br> <!-- Saltos de línea para separar visualmente los campos -->
        NOMBRE: <input type="text" name="nom"> <!-- Campo de texto para el nombre -->
        <br><br>
        APELLIDO PATERNO: <input type="text" name="pat"> <!-- Campo para apellido paterno -->
        <br><br>
        APELLIDO MATERNO: <input type="text" name="mat"> <!-- Campo para apellido materno -->
        <br><br>
        FECHA NACIMIENTO: <input type="date" name="fecnac"> <!-- Campo de tipo fecha para la fecha de nacimiento -->
        <br><br>

        <input type="submit" value="Adicionar Persona"> <!-- Botón de envío del formulario con texto visible -->
    </form> <!-- Fin del formulario PERSONA -->

    <br><br><hr><br> <!-- Separador visual entre formularios: saltos y una línea horizontal -->

    <!-- FORMULARIO AGENDACIÓN --> <!-- Comentario indicando inicio del formulario para AGENDA -->
    <form action="adicion2.php" method="post"> <!-- Segundo formulario que también envía a `adicion2.php` por POST -->
        <h3>Adicionar AGENDA</h3> <!-- Encabezado del formulario de agenda -->

        IDAGENDACION: <input type="text" name="idagen"> <!-- Campo para el identificador de la agendación -->
        <br><br>
        FECHA: <input type="date" name="fec"> <!-- Campo de fecha para la agenda -->
        <br><br>
        HORA: <input type="time" name="hor"> <!-- Campo de hora para la agenda -->
        <br><br>
        ACTIVIDAD: <input type="text" name="act"> <!-- Campo de texto para describir la actividad -->
        <br><br>

        COMPLETADO: <!-- Etiqueta para indicar el campo de completado -->
        <select name="comp"> <!-- Menú desplegable para marcar si la actividad está completada -->
            <option value="1">SI</option> <!-- Opción que representa 'sí' -->
            <option value="0">NO</option> <!-- Opción que representa 'no' -->
        </select>
        <br><br>

        <input type="submit" value="Adicionar Agenda"> <!-- Botón de envío para el formulario de agenda -->
    </form> <!-- Fin del formulario AGENDA -->

</center> <!-- Fin del centrado -->
</body> <!-- Fin del cuerpo del documento -->
</html> <!-- Fin del documento HTML -->
