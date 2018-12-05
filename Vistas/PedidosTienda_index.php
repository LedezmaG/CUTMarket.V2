<?php
include("../Logica/Conexion.php");
session_start();
if ($_SESSION['Loggeado'] != true) {
	header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pedidos</title>
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
			.contenedor {
				width: 100%;
				max-width: 800px;
				height: auto;
				margin: 0 auto;
				margin-top: -10px;
			}

			.contenedor-pedidos {
				width: 99%;
				height: auto;
				margin: 0 auto;
			}

			.pedidos {
				width: 100%;
				height: auto;
				margin-bottom: 10px;
				border: 1px solid black;
				border-radius: 4px;
				padding: 10px;
				background: #ffffff;
			}

			h2 {
				width: 100%;
				text-align: left;
				border-bottom: 2px solid black;
				padding: 10px;
			}
		</style>
	</head>

	<body>
		<div class="contenedor">
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
									<a class="dropdown-item" href="Pedidos_index.php">Mis Pedidos</a>
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
									<a id="btnPedidos" class="dropdown-item" href="#">Pedidos</a>
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
			<br>
			<main>
				<!--TITULO-->
				<h2>Pedidos</h2>
				<!--PEDIDOS-->
				<div class="contenedor-pedidos">
					<?php
						$Sql = "SELECT * FROM tienda WHERE nombre ;";
						$Resul = mysqli_query($conn,$Sql);

						while ($Mostrar = mysqli_fetch_array($Resul)) {
					 ?>
					<div class="pedidos">
						<p>
							<h4 id="cliente">Nombre Cliente</h4>
						</p>
						<div class="dropdown-divider"></div>
						<p id="pedido">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				<?php } ?>
				</div>
			</main>
			<footer>
				<p class="mt-5 mb-3 text-muted" style="text-align: center;">Copyright &copy; CUTMarket 2018-2019</p>
			</footer>
		</div>
	</body>
</html>
