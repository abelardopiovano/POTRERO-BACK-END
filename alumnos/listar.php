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
    <td><img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']) ?>" alt="" width="100px" height="100px"></td>
    <td></td>

    
   
    
    
   
    
    </tr>
    <?php
}?>


