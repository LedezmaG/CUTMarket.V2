<?php
include('Conexion.php');
$_POST['sutmitFOTO']

  //obtiene el puro nombre de la imagen
  $img = $_FILES['inputFoto']['name'];
  $imagentmpnombre = $_FILES['inputFoto']['tmp_name'];
  $carpeta = "../imgTienda/";

  move_uploaded_file($imagentmpnombre, $carpeta.$img);

$Query_Registro = "INSERT INTO tienda (foto) VALUES ('$img');";
//$Resultado_ = $conn -> query($Query_Registro);
if ($conn->query($Query_Registro) === TRUE) {
    ?>
  <script>
    alert("Foto Actualizada");
    window.location.href = "../Vistas/Tienda_index.php";
  </script>
    <?php
  }else {
    echo "Error ";
}

?>
