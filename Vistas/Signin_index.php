<?php
include("../Logica/Conexion.php");
session_start();

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
      <form class="form-registry" action="../logica/Signin_logica.php" method="POST" enctype="multipart/form-data">
        <br><br><br>
        <h1 class="h3 mb-3 font-weight-normal">Registro</h1>
        <br>
        <label for="inputCodigo" class="sr-only">Codigo</label>
        <input type="text" name="txtCodigo" id="inputCodigo" class="form-control" placeholder="Codigo Estudiante o Maestro" autocomplete="off"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength=9 required autofocus>
        <label for="inputNombre" class="sr-only">Nombre</label>
        <input type="text" name="txtNombre" id="inputNombre" class="form-control" placeholder="Nombre" autocomplete="off" onkeydown="return alphaOnly(event);" maxlength=30 required autofocus>
        <label for="inputTelefono" class="sr-only">Telefono</label>
        <input type="text" name="txtTelefono" id="inputTelefono" class="form-control" placeholder="Telefono" autocomplete="off"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength=10 required autofocus>
        <label for="inputEmail" class="sr-only">Correo</label>
        <input type="email" name="txtEmail" id="inputEmail" class="form-control" placeholder="Correo" autocomplete="off" required autofocus>
        <label for="inputFecha" class="sr-only">Fecha de nacimiento</label>
        <input type="date" name="inputFecha" id="inputFecha" class="form-control" placeholder="Fecha de nacimiento" autocomplete="off" required autofocus>
        <label for="inputFecha" class="sr-only">Tipo de usuario</label>
        <select class="form-control" placeholder="Tipo de usuario" autocomplete="off" required autofocus>
        <option disabled selected value>Selecciona tipo de usuario</option>
        <option value=1>Cliente</option>
        <option value=2>Vendedor</option>
        </select>
        <label for="inputUsername" class="sr-only">Usuario</label>
        <input type="text" name="txtUsuario" id="inputUsername" class="form-control" placeholder="Usuario" autocomplete="off" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" name="txtPassword" id="inputPassword" class="form-control" placeholder="Contraseña" onkeyup='compararContrasena();' autocomplete="off" required>
        <label for="inputConfirmar" class="sr-only">Confirmar Contraseña</label>
        <input type="password" name="txtConfirmar" id="inputConfirmar" class="form-control" placeholder="Confirmar contraseña" onkeyup='compararContrasena();' autocomplete="off" required>
        <h3 id="lblEstado"></h3>
        <br>
        <div class="dropdown-divider"></div>
        <label for="inputPhoto">Credencial de Estudiante o Maestro</label>
        <input type="file" name="inputFoto" id="inputFoto" class="file-upload-btn" placeholder="Photo" autocomplete="off" required>
        <img id="img" src=''>

        <br><br>
        <button class="btn btn-lg btn-dark btn-block" type="submit" id="btnSubmit" name="btnSubmit">Registrarse</button>
      </form>
    </main>
    <footer>
      <p class="mt-5 mb-3 text-muted" style="text-align: center;">Copyright &copy; CUTMarket 2018-2019</p>
    </footer>
    </div>
    <script>

    /* $('#inputFoto').change( function(event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    document.write(tmppath);

      document.getElementById('img').src = "";

});*/
        function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8 || key == 32 || key == 9);
    };

    function numberOnly(event) {
      var key = event.keyCode;
      return ((key >= 48 && key <= 57) || key == 8 || key == 32 ||  key == 9);
    };

    var compararContrasena = function()
    {
      if(document.getElementById('inputPassword').value != document.getElementById('inputConfirmar').value)
      {
        document.getElementById('lblEstado').style.color = 'red';
        //document.getElementById('lblEstado').style.backgroundColor = 'red';
        document.getElementById('lblEstado').innerHTML = "Contraseñas no coinciden";
        document.getElementById('btnSubmit').disabled = true;
      }
      else if(document.getElementById('inputPassword').value == "" && document.getElementById('inputConfirmar').value == "")
      {
        document.getElementById('lblEstado').style.color = 'yellow';
        document.getElementById('lblEstado').innerHTML = "Contraseñas vacias";
        document.getElementById('btnSubmit').disabled = true;
      }

      else
      {
          document.getElementById('lblEstado').style.color = 'green';
          document.getElementById('lblEstado').innerHTML = "Contraseñas coinciden";
          document.getElementById('btnSubmit').disabled = false;
      }

    }
    </script>
  </body>
</html>
