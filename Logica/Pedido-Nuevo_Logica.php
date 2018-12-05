<?php
  include('Conexion.php');
  session_start();

  $idProducto = $_GET['id'];
  $precio = $_GET['precio'];
  $cantidad = $_GET['cantidad'];
  $total = $precio * $cantidad;
  $idTienda = $_SESSION['idTienda'];
  $codigo = $_SESSION['Codigo'];

echo $cantidad, $precio;

    $sql = "INSERT INTO pedido (id_usuario, id_tienda, id_producto, cantidad, Precio, total) VALUES ($codigo,$idTienda,$idProducto, $cantidad,$precio,$total); ";
    //$Resultado_ = $conn -> query($Query_Registro);
    if ($conn->query($sql) === TRUE) {
        ?>
      <script>
        alert("Pedido realizado exitosamente");
        window.location.href = "../Vistas/TiendaVendedor_index.php";
      </script>
        <?php
      }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 ?>
