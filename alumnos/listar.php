<?php
$conexion=mysqli_connect("localhost","root","Fanwar321456");
mysqli_select_db($conexion,"escuela");
$consulta="SELECT * FROM alumnos";
$datos=mysqli_query($conexion,$consulta);

while($fila=mysqli_fetch_array($datos)){?>
<br>
    <tr>
    <td><?php echo $fila['id']?></td>
    <td><?php echo $fila['nombre']?></td>
    <td><?php echo $fila['apellido']?></td>
    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $fila['imagen'] ).'"/>';?></td>
    
    
   
    
    </tr>
    <?php
}?>


