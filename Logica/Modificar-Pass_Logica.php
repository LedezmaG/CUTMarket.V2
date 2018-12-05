<?php

  include("Conexion.php");
  session_start();

  $newPass = $_POST['newPassword0'];
  $codigo = $_SESSION['Codigo'];


  $Query = $conn -> query("UPDATE usuario SET password = '$newPass' WHERE codigo_udg = '$codigo';");
  if ($Resultado = mysqli_fetch_array($Query))
  {
    ?>
    <script type="text/javascript">
      alert("Contraseña modificada");
      window.location.href = "../Vistas/Perfil_index.php";
    </script>

    <?php
  }
  else
  {
    echo "<script language='javascript'> alert('¡Error coroborar Username y Pasword!')</script>";
    header("location: ../vistas/Login_index.php");
  }
?>
