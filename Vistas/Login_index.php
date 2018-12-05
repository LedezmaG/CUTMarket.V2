<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CUTMarket</title>
		<!--LIBRERIAS DE CSS-->
		<link rel="stylesheet" type="text/css" href="../bootstrap-4.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="../fontawesome_5.3.1/css/all.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<!--LIBRERIAS DE JS-->
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="../js/main.js"></script>
		<style>
      .contenedor-signin {
        width: 100%;
        max-width: 800px;
        height: auto;
        margin: 0 auto;
      }

      .form-signin {
        width: 100%;
        max-width: 340px;
        padding: 20px;
        margin: auto;
        text-align: center !important;
      }

      /* Botones Redes sociales */
      .btn-social{
        position: relative;
      }

      .btn-facebook{
        background: #3b5998;
        color: #fff;
      }

      .btn-google{
        background: #dd4b39;
        color: #fff;
      }

      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }

      .form-signin .form-control:focus {
        z-index: 2;
      }

      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .btn {
        background: #03648f !important;
        border: none;
      }

      .btn:hover {
        background: #04567c !important;
      }

      #btnRegistro {
        color: #7B8184 !important;
      }

      #btnRegistro:hover {
        color: #04567c !important;
      }

      .form-signin {
        width: 100%;
        max-width: 340px;
        padding: 20px;
        margin: auto;
        text-align: center !important;
      }

      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }

      .form-signin .form-control:focus {
        z-index: 2;
      }

      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .btn {
        background: #03648f !important;
      }

      .btn:hover {
        background: #04567c !important;
      }

      #btnRegistro {
        color: #7B8184 !important;
      }

      #btnRegistro:hover {
        color: #04567c !important;
      }
    </style>
    <script>
      $("#btnRegistro").click(function() { //Funcion para cargar la vista 'Registry'
        console.log("#btnRegistro");
        $.ajax({
          type: "POST",
          url:'vistas/registry.html',
          dataType: 'html',
          data:{},
          success: function(datos){
            $(".contenido-principal").html(datos);
          }
        });
      });
    </script>
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
      <br><br><br>
      <div class="contenedor-signin">
      <form class="form-signin" action="../Logica/Login_logica.php" method="post">
        <img class="mb-4" src="../img/Access-Control-Lock.png" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
        <label for="inputCodigo" class="sr-only">Codigo</label>
        <input type="text" id="inputCodigo" name="Codigo" class="form-control" placeholder="Codigo" autocomplete="off" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="Pass" class="form-control" placeholder="Password" autocomplete="off" required>
        <br>
        <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted"><a id="btnRegistro" href="Signin_index.php">Registrarse</a></p>
      </form>
    </div>
    </main>
    <footer>
      <p class="mt-5 mb-3 text-muted" style="text-align: center;">Copyright &copy; CUTMarket 2018-2019</p>
    </footer>
    </div>
  </body>
</html>
