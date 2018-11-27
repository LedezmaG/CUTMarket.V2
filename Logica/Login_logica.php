<?php

  include("Conexion.php");

  $Codigo = $_POST['Codigo'];
  $Pass = $_POST['Pass'];

  $Query = $conn -> query("SELECT * FROM usuario WHERE codigo_udg = '$Codigo' and Password = '$Pass';");
  if ($Resultado = mysqli_fetch_array($Query))
  {
    //if (password_verify($Pass,  $Resultado[0]));
    //{
        session_start();
        $_SESSION['tipo'] = $Resultado['tipo_usuario'];
        $_SESSION['User'] = $Resultado['User'];
        $_SESSION['Pass'] = $Pass;
        $_SESSION['Loggeado'] = true;
        //echo "<script language='javascript'> alert('¡Bienvenido!')</script>";
        header("location: ../index.php");
    //}
  }
  else
  {
    echo "<script language='javascript'> alert('¡Error coroborar Username y Pasword!')</script>";
    header("location: ../vistas/Login_index.php");
  }
?>
