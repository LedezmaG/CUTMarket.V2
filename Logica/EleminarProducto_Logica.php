<?php

  include("Conexion.php");

  $identificador = $_POST['identificador'];

  $Query = $conn -> query("DELETE FROM producto WHERE id_producto = '$identificador';");
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
