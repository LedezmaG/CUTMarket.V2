<?php

  include("Conexion.php");

  $User = 'Isra';
  $Pass = 'admin';

  $Query = $conn -> query("SELECT Username FROM usuario WHERE Username = '$User' and Password = '$Pass';");
  if ($Resultado = mysqli_fetch_array($Query))
  {
  echo "Si";  
  }
  else {
  echo "No";
  }
?>
