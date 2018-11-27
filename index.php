<?php
include("Logica/Conexion.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CUTMarket</title>
	<!--LIBRERIAS DE CSS-->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome_5.3.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!--LIBRERIAS DE JS-->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<style>
		.formBuscar {
	    width: 100%;
	    height: 40px;
		}

		.input {
		    width: calc(100% - 100px);
		    float: left;
		}

		.button {
		    width: 100px;
		    float: right;
		}

		#btnBuscar {
		    width: 100%;
		}
		.contenedor-inicio {
			width: 100%;
			max-width: 800px;
			height: auto;
			margin: 0 auto;
		}

		.tarjeta {
			width: 100%;
			height: 200px;
			padding: 10px;
			margin-bottom: 10px;
			border: 2px solid black;
			border-radius: 4px;
			display: block;
		}

		.tarjetaContenido {
			width: 60%;
			height: 100%;
			float: left;
		}

		.tarjetaImagen {
			width: 35%;
			height: 100%;
			float: right;
			background: grey;
			border-radius: 10px;
			border: 1px solid black;
		}

		.tarjetaImagen img{
			width: 100%;
			height: 100%;
			border-radius: 10px;
		}
	</style>
</head>

<body>
	<div class="contenedor-general">
		<header>
			<!--BARRA DE NAVEGACION-->
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #212529;">
				<!--LOGO-->
				<a class="navbar-brand" href="#"><img src="img/Cut_Market.png" width="100" height="52"></a>
				<!--TOGGLER-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<!--BOTON INICIO-->
						<li class="nav-item">
							<a id="btnHome" class="nav-link" href="#"><i class="fas fa-home"></i> Inicio</a>
						</li>
						<!--BOTON OPCIONES-->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-sliders-h"></i> Opciones
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<!--BOTON ***-->
							  <a class="dropdown-item" <?php if($_SESSION['Loggeado']== true){ ?> href="vistas/perfil_index.php" <?php }else{ ?> href="vistas/Login_index.php" <?php } ?>>Perfil</a>
								<div class="dropdown-divider"></div>
								<!--BOTON ***-->
								<a class="dropdown-item" <?php if($_SESSION['Loggeado']== true){ ?> href="vistas/Pedidos_index.php" <?php }else{ ?> href="vistas/Login_index.php" <?php } ?>>Pedidos</a>
								<div class="dropdown-divider"></div>
								<!--BOTON ***-->
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<!--BOTON TIENDA-->
						<?php
							if ($_SESSION['tipo'] == 2) {
						 ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bookmark"></i> Tienda
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<!--BOTON ***-->
								<a class="dropdown-item" href="#">Action</a>
								<div class="dropdown-divider"></div>
								<!--BOTON ***-->
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<!--BOTON PEDIDOS-->
								<a id="btnPedidos" class="dropdown-item" href="#">Pedidos</a>
							</div>
						</li>
					<?php } ?>
					</ul>
					<span class="navbar-text">
						<ul class="navbar-nav mr-auto">
							<!--BOTON LOGIN-->
							<?php
								if ($_SESSION['Loggeado'] == true) {?>
									<li class="nav-item">
										<a id="btnLogout" class="nav-link" href="logica/Logout.php" style="margin-right: 10px;"><span><i class="fas fa-sign-out-alt"></i> Logout</span></a>
									</li>.
								<?php } else{ ?>
							<li class="nav-item">
								<a id="btnLogin" class="nav-link" href="vistas/Login_index.php" style="margin-right: 10px;"><span><i class="fas fa-sign-in-alt"></i> Login</span></a>
							</li>
						<?php } ?>
						</ul>
					</span>
				</div>
			</nav>
		</header>
		<!--CONTENIDO-->
		<main>
			<div class="contenedor-inicio">
				<div class="formBuscar">
				  <div class="input">
						<form class="" action="index.php" method="get">
							<input id="inputBuscar" name="Clave" class="form-control" type="text" placeholder="Search" aria-label="Search">
						  </div>
						  <div class="button">
						    <button id="btnBuscar" name="Buscador" class="btn btn-outline-success" type="submit" >
						      Search
						  </button>
						</form>
				  </div>
				</div>
				<br>
				<section>
					<form class="" action="tienda_index.php?$Mostrar['nombre'];" method="get">

					<?php
					$_GET['Buscador']= null;
					$Buscar = null;
					if (!$_GET['Buscador']) {
						$Buscar = $_GET['Clave'];
						echo "Buscador";
						if (empty($Buscar)) {
							//$Cuenta = $_SESSION['User'];
							$Sql = "SELECT * FROM inicio;";
							$Resul = mysqli_query($conn,$Sql);

							while ($Mostrar = mysqli_fetch_array($Resul)) {
							?>
							<form class="" action="index.html" method="post">

						<div class="tarjeta"  onclick="EnviarDatosTienda(<?php echo $Mostrar['id']; ?>)">
							<div class="tarjetaContenido">
									<h4 id="tienda_nombre"><?php echo $Mostrar['nombre'];  ?></h4>
								<div class="dropdown-divider"></div>
								<p id="tienda_descripcion">
									<?php
										$Producto = $Mostrar['producto'];
										echo $Mostrar['producto'];
										echo $Mostrar['foto'];
									 ?>
								</p>
							</div>
							<div class="tarjetaImagen">
								<img src="img/papas-naturales.png">
							</div>
						</div>
					</form>
					<?php
						}
					}
					else {
						$Sql = "SELECT * FROM inicio WHERE Nombre LIKE '%$Buscar%';";
						$Resul = mysqli_query($conn,$Sql);

						while ($Mostrar = mysqli_fetch_array($Resul)) {
						?>

					<div class="tarjeta" onclick="EnviarDatosTienda(<?php echo $Mostrar['id']; ?>)">
						<div class="tarjetaContenido">
							<h4 id="tienda_nombre"><?php echo $Mostrar['nombre'];  ?></h4>
							<div class="dropdown-divider"></div>
							<p id="tienda_descripcion">
								<?php
									echo $Mostrar['producto'];
									echo $Mostrar['foto'];
								 ?>
							</p>
						</div>
						<div class="tarjetaImagen">
							<img src="img/papas-naturales.png">
						</div>
					</div>
				<?php
					}
					}
					}
					?>
					</form>
				</section>
			</div>
		</main>
		<footer>
			<p class="mt-5 mb-3 text-muted" style="text-align: center;">Copyright &copy; CUTMarket 2018-2019</p>
		</footer>
	</div>
</body>
</html>

<script type="text/javascript">
function EnviarDatosTienda(id)
{
	alert(id);
	window.location.replace("http://localhost/CUTMarket.V2/vistas/tienda_index.php");

}

</script>
