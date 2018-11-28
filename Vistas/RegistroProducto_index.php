<?php

include('../Logica/Conexion.php');
session_start();
$ID = $_GET['id'];
$_SESSION['idTienda'] = $ID;
?>


<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registro de usuarios</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <style>
      .contenedor-signup {
      width: 100%;
      max-width: 800px;
      height: auto;
      margin: 0 auto;
      }

      .form-registry {
      width: 100%;
      max-width: 500px;
      padding: 20px;
      margin: auto;
      text-align: center !important;
      }

      .form-registry .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
      margin-bottom: 20px;
      }

      .form-registry .form-control:focus {
      z-index: 2;
      }

      .btn {
      background: #03648f !important;
      text-transform: uppercase;
      border: none;
      }

      .btn:hover {
      background: #04567c !important;
      }

      .custom-file-label {
      text-align: left;
      padding: 10px;
      }

      .file-upload {
      background-color: #ffffff;
      width: 100%;
      margin: 0 auto;
      }

      .file-upload-btn {
      width: 100%;
      margin: 0;
      color: #fff;
      background: #1FB264;
      border: none;
      padding: 10px;
      border-radius: 5px;
      transition: all .2s ease;
      text-transform: uppercase;
      cursor: pointer;
      }

      .file-upload-btn:hover {
      background: #1AA059;
      color: #ffffff;
      transition: all .2s ease;
      cursor: pointer;
      }

      .file-upload-btn:active {
      border: 0;
      transition: all .2s ease;
      }

      .file-upload-content {
      display: none;
      text-align: center;
      }

      .file-upload-image {
      /*border: 5px dashed #1FB264;*/
      }

      .file-upload-input {
      position: absolute;
      display: block;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      outline: none;
      opacity: 0;
      cursor: pointer;
      margin-top: -44px;
      }

      .image-upload-wrap {
      margin-top: 10px;
      position: relative;
      }

      .image-title-wrap {
      padding: 0 15px 15px 15px;
      color: #222;
      }

      .file-upload-image {
      max-height: 250px;
      max-width: 300px;
      margin: auto;
      padding: 20px;
      }

      .form-registry {
        width: 100%;
        max-width: 500px;
        padding: 20px;
        margin: auto;
        text-align: center !important;
      }

      .form-registry .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 20px;
      }

      .form-registry .form-control:focus {
        z-index: 2;
      }

      .btn {
        background: #03648f !important;
      }

      .btn:hover {
        background: #04567c !important;
      }
    	.contenedor-inicio {
    		width: 100%;
  			max-width: 800px;
  			height: auto;
  			margin: 0 auto;
    	}
    </style>
  </head>
  <body class="text-center">
    <div class="contenedor-general">
    <header>
        <!--BARRA DE NAVEGACION-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #212529;">
          <!--LOGO-->
          <a class="navbar-brand" href="../index.php"><img src="../img/Cut_Market.png" width="100" height="52"></a>
          <!--TOGGLER-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <!--BOTON INICIO-->
              <li class="nav-item">
                <a id="btnHome" class="nav-link" href="../index.php"><i class="fas fa-home"></i> Inicio</a>
              </li>
            </ul>
            <span class="navbar-text">
              <ul class="navbar-nav mr-auto">
                <!--BOTON LOGIN-->
                <li class="nav-item">
                  <a id="btnLogin" class="nav-link" href="Login_index.php" style="margin-right: 10px;"><span><i class="fas fa-sign-in-alt"></i> Login</span></a>
                </li>
              </ul>
            </span>
          </div>
        </nav>
    </header>
    <main>
      <form class="form-registry" action="../logica/RegistrarProducto_logica.php" method="POST">
        <br><br><br>
        <h1 class="h3 mb-3 font-weight-normal">Registro de producto</h1>
        <br>
        <label for="inputNombre" class="sr-only">Nombre</label>
        <input type="text" name="txtNombre" id="inputNombre" class="form-control" placeholder="Nombre de producto" autocomplete="off"   maxlength=20 required autofocus>

        <label for="inputDescripcion" class="sr-only">Descripcion</label>
        <textarea name="txtDescripcion" id="inputDescripcion" class="form-control" placeholder="Descripcion" autocomplete="off"  maxlength=30 rows=2 required autofocus></textarea>

        <label for="inputPrecio" class="sr-only">Precio</label>
        <input type="text" name="txtPrecio" id="inputPrecio" class="form-control" placeholder="Precio" autocomplete="off" required autofocus>



        <h3 id="lblEstado"></h3>

        <br><br>
        <button class="btn btn-lg btn-dark btn-block" type="submit" id="btnSubmit" name="btnSubmit">Registrar producto</button>
      </form>
    </main>
    <footer>
      <p class="mt-5 mb-3 text-muted" style="text-align: center;">Copyright &copy; CUTMarket 2018-2019</p>
    </footer>
    </div>
    <script>

  $("input[name=txtPrecio]").on('input', function() {
  this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');
});


    </script>
  </body>
</html>
