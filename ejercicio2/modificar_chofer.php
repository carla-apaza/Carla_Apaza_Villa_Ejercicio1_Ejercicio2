<?php include("conectar.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css"> <!-- Hoja de estilos -->
</head>
<body>

<div class="contenedor"> <!-- Contenedor del formulario -->
    <h2>Modificar Chofer</h2>

    <!-- Formulario para modificar el nombre completo de un chofer por su ID -->
    <form action="modificar_chofer2.php" method="POST" onsubmit="return validar();">

        <input type="number" name="idchofer" id="idchofer" placeholder="ID Chofer"> <!-- ID del chofer a modificar -->

        <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nuevo nombre completo"> <!-- Nuevo nombre -->

        <button type="submit">Modificar</button>
    </form>
</div>

<script>
// Validación en cliente: comprueba que exista ID y nuevo nombre antes de enviar
function validar(){
    if(idchofer.value.trim()===""){
        alert("Ingrese el ID del chofer");
        return false;
    }
    if(nombrecompleto.value.trim()===""){
        alert("Ingrese el nuevo nombre del chofer");
        return false;
    }
    return true;
}
</script>

</body>
</html>
