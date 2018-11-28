<?php
  include('Conexion.php');

  $codigo = $_POST['txtCodigo'];
  $nombre = $_POST['txtNombre'];
  $telefono = $_POST['txtTelefono'];
  $correo = $_POST['txtEmail'];
  $fecha = date('Y-m-d', strtotime($_POST['inputFecha']));
  $usuario = $_POST['txtUsuario'];
  $contra = $_POST['txtPassword'];


  if(isset($_POST['btnSubmit']))
  {
    //obtiene el puro nombre de la imagen
    $imagen = $_FILES['inputFoto']['name'];
    $imagentmpnombre = $_FILES['inputFoto']['tmp_name'];
    $carpeta = "../imgUsuarios/";

    move_uploaded_file($imagentmpnombre, $carpeta.$imagen);
  }

 // echo "<div id='img_div'> ";
  //echo "<img src='".$imagentmpnombre."'>";


  //$imagen = addslashes(file_get_contents($_FILES['inputPhoto']['tmp_name'])); // se toma la imajen para poder guarar en bd

  $PassCryp = password_hash($contra, PASSWORD_DEFAULT, array("cost" => 10));

  $Query = "SELECT user FROM usuario WHERE user = '$usuario' ";
  $queryCorreo = "SELECT correo FROM usuario WHERE correo = '$correo' ";

  $result = $conn->query($Query);
  $resultadoCorreo = $conn->query($queryCorreo);

  if ($result->num_rows <= 0 && $resultadoCorreo->num_rows <=0) {

    $Query_Registro = "INSERT INTO usuario VALUES ($codigo,'$nombre','$telefono','$correo','$usuario','$PassCryp','$fecha',1 ,1 , '$imagen');";
    //$Resultado_ = $conn -> query($Query_Registro);
    if ($conn->query($Query_Registro) === TRUE) {
        ?>
      <script>
        alert("Usuario registrado con exito");
        window.location.href = "../Vistas/Login_index.php";
      </script>
        <?php
      }else {
        echo "Error ";
    }
    }
  else {
      ?>
      <script>
        alert("Usuario o correo ya existente");
        window.location.href = "../Vistas/Signin_index.php"
      </script>
      <?php

  }

 ?>
