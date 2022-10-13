<?php
include("estructura.php");
include("menu.php");
?>
<h1>LISTADO DE PRENDAS</h1>



<?php
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "tp_7");
$consulta = "SELECT * FROM ropa WHERE marca='nike'";
$datos = mysqli_query($conexion, $consulta);

?>

<div class="container">

  <div class="row d-flex justify-content-center text-center">

    <?php
    while ($fila = mysqli_fetch_array($datos)) {
    ?>
      <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center text-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']) ?>" alt="Card image cap">
          <div class="card-body">
            <h1 class="card-title"><?php echo $fila['tipo_de_prenda'] ?></h1>
            <h2 class="card-title"><?php echo $fila['marca'] ?></h2>
            <h3 class="card-title"><?php echo $fila['talle'] ?></h3>
            <h4 class="card-title"><?php echo $fila['precio'] ?></h4>
            <a href="#" class="btn btn-primary">COMPRAR</a>
          </div>
        </div>

      </div>
    <?php
    }
    ?>


  </div>




</div>
