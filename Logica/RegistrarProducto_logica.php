<?php
  include('Conexion.php');
  session_start();

  $idTienda = $_SESSION['idTienda'];
  $nombre = $_POST['Nombre'];
  $descripcion = $_POST['Descripcion'];
  $precio = $_POST['Precio'];

/*
  if(isset($_POST['btnSubmit']))
  {
    //obtiene el puro nombre de la imagen
    $imagen = $_FILES['inputFoto']['name'];
    $imagentmpnombre = $_FILES['inputFoto']['tmp_name'];
    $carpeta = "../imgUsuarios/";

    move_uploaded_file($imagentmpnombre, $carpeta.$imagen);
  }*/

    $sql = "INSERT INTO producto (id_tienda,nombre,descripcion,precio) VALUES ($idTienda,'$nombre','$descripcion', $precio); ";
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
