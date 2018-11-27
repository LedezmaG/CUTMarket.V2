<?php

    include("Conexion.php");

    $Clave = $_GET['Buscador'];

    if (empty($Clave)) {

      $Sql = "SELECT * FROM inicio;";
      $Resul = mysqli_query($conn,$Sql);

      while ($Mostrar = mysqli_fetch_array($Resul)) {
      ?>

    <div class="tarjeta">
      <div class="tarjetaContenido">
        <h4 id="tienda_nombre"><?php echo $Mostrar['nombre'];  ?></h4>
        <div class="dropdown-divider"></div>
        <p id="tienda_descripcion">
          <?php
            echo $Mostrar['producto'];
            echo $Mostrar['foto'];
           ?>
        </p>
      </div>
      <div class="tarjetaImagen">
        <img src="img/papas-naturales.png">
      </div>
    </div>
    <?php
    }
  }

  ?>
