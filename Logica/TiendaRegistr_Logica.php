<?php
  include('Conexion.php');
  session_start();
  $idTienda = $_SESSION['idTienda'];
  $codigo = $_SESSION['Codigo'];

  $nombre = $_POST['NombreTienda'];
  $Ubicacion = $_POST['Ubicacion'];
  $descripcion = $_POST['Descipcion'];
//  $precio = $_POST['txtPrecio'];

/*
  if(isset($_POST['btnSubmit']))
  {
    //obtiene el puro nombre de la imagen
    $imagen = $_FILES['inputFoto']['name'];
    $imagentmpnombre = $_FILES['inputFoto']['tmp_name'];
    $carpeta = "../imgUsuarios/";

    move_uploaded_file($imagentmpnombre, $carpeta.$imagen);
  }*/

    $sql = "INSERT INTO Tienda (codigo_udg,nombre,ubicacion,descripcion) VALUES ($codigo,'$nombre','$descripcion','$Ubicacion') ";
    //$Resultado_ = $conn -> query($Query_Registro);
    if ($conn->query($sql) === TRUE) {
        ?>
      <script>
        alert("Producto agregado exitosamente");
        window.location.href = "../Vistas/TiendaVendedor_index.php";
      </script>
        <?php
      }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 ?>
