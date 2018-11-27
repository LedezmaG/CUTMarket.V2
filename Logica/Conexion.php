<?php
//Conexion a base de datos
  $conn = new mysqli("localhost","root","admin","cutmarket");

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
