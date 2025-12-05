<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Agregar Chofer</h2>

    <form action="adicion_chofer2.php" method="POST" onsubmit="return validarChofer();">
        <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Nombre completo">
        <button type="submit">Guardar Chofer</button>
    </form>
</div>

<script>
function validarChofer(){
    let nom = document.getElementById("nombrecompleto").value;
    if(nom.trim() === ""){
        alert("Ingrese el nombre completo del chofer");
        return false;
    }
    return true;
}
</script>

</body>
</html>
