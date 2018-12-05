<?php
include("../Logica/Conexion.php");
session_start();
$codigo = $_SESSION['Codigo'];
if ($_SESSION['Loggeado'] != true) {
	header("location: ../index.php");
}

 ?>
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
					<a class="navbar-brand" href="../index.php"><img src="../img/Cut_Market.png" width="100px" height="52"></a>
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
							<!--BOTON OPCIONES-->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-sliders-h"></i> Opciones
								</a>

								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<!--BOTON ***-->
									<a class="dropdown-item" href="Perfil_index.php">Perfil</a>
									<div class="dropdown-divider"></div>
									<!--BOTON ***-->
									<a class="dropdown-item" href="#">Mis Pedidos</a>
								</div>
							</li>
							<!--BOTON TIENDA-->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-bookmark"></i> Tienda
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<!--BOTON ***-->
									<a class="dropdown-item" href="TiendaVendedor_index.php">Mi Tienda</a>
									<div class="dropdown-divider"></div>
									<!--BOTON PEDIDOS-->
									<a id="btnPedidos" class="dropdown-item" href="PedidosTienda_index.php">Pedidos</a>
								</div>
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
			<div class="form-registry">
      <h1>Eliminar Producto</h1>
        <?php
        $Sql = "SELECT * FROM usuario WHERE codigo_udg = '$codigo';";
        $Resul = mysqli_query($conn,$Sql);

        while ($Mostrar = mysqli_fetch_array($Resul)) {
        ?>
        <form class="" action="index.html" method="post">
          identificador
          <label for="inputCodigo" class="sr-only">identificador</label>
          <input type="text" disabled name="Codigo" id="inputCodigo" class="form-control" placeholder="<?php echo $Mostrar['codigo_udg'];  ?>" autocomplete="off" required autofocus>
        </form>
      <?php } ?>
			</div>
    </main>
    <footer>
      <p class="mt-5 mb-3 text-muted" style="text-align: center;">Copyright &copy; CUTMarket 2018-2019</p>
    </footer>
    </div>
  </body>
</html>
