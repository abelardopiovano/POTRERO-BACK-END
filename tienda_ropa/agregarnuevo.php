
<?php
include("estructura.php");
include("menu.php");
?>
    
    <h2>Agregar ropa</h2>
    <p>Ingrese los datos de la prenda.</p>


    <form method="POST" action="agregar.php" enctype="multipart/form-data">
        <label>Tipo de prenda</label>
        <input type="text" name="tipo_de_prenda" placeholder="Tipo de prenda" required>
        <label>Marca</label>
        <input type="text" name="marca" placeholder="Marca" required>
        <label>Talle</label>
        <input type="text" name="talle" placeholder="Talle" required>
        <label>Precio</label>
        <input type="text" name="precio" placeholder="precio"   required >
        <label>Imagen</label>
        <input type="file" name="imagen" placeholder="imagen">
        <input type="submit" name="submit" value="Ingresar">
    </form>

