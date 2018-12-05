<?php

  include("Conexion.php");

  $identificador = $_POST['identificador'];
  $name = $_POST['identNombre'];
  $Descripcion = $_POST['Descripcion'];
  $Precio = $_POST['Precio'];


  $Query = $conn -> query("UPDATE producto SET nombre = '$name' ,descripcion = '$Descripcion',precio = '$Precio' WHERE id_producto = '$identificador';");
  if ($Resultado = mysqli_fetch_array($Query))
  {
        session_start();
        header("location: ../TiendaVendedor_index.php");
  }
  else
  {
    header("location: ../vistas/TiendaVendedor_index.php");
  }

?>
