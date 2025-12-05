<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Eliminar Chofer</h2>

    <form action="eliminacion_chofer2.php" method="POST" onsubmit="return validar();">

        <input type="number" name="idchofer" id="idchofer" placeholder="ID de Chofer">

        <button type="submit">Eliminar</button>
    </form>
</div>

<script>
function validar(){
    if(idchofer.value.trim()===""){
        alert("Ingrese el ID del chofer");
        return false;
    }
    return true;
}
</script>

</body>
</html>
