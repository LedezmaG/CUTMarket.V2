<?php
  include('Conexion.php');
  $Nombre = $_POST['Nombre'];
  $Codigo = $_POST['Codigo'];
  $User = $_POST['Username'];
  $Pass = $_POST['Password'];

  //$imagen = addslashes(file_get_contents($_FILES['inputPhoto']['tmp_name'])); // se toma la imajen para poder guarar en bd

  $PassCryp = password_hash($Pass, PASSWORD_DEFAULT, array("cost" => 10));

  $Query = $conn -> query("SELECT (Username) FROM usuario WHERE Username = '$User';");
  if ($Resultado = mysqli_fetch_array($Query))
  {
    echo "NO";
    //echo "<script language='javascript'> alert('Usuario Existente Porfavor elegir un usuario diferente')</script>";
    //header("location: ../vistas/Signin_index.html");
  }

  else {
    $Query_Registro = "INSERT INTO usuario (Codigo, Nombre, Username) VALUES ($Codigo, $Nombre, $User);";
    $Resultado_ = $conn -> query($Query_Registro);
    echo "Registrado";
    //header("location: ../vistas/Login_index.php");

  }

 ?>
