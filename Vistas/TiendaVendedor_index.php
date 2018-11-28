<?php
include('../Logica/Conexion.php');
session_start();
$codigo = $_SESSION['Codigo'];
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
    .contenedor-tienda {
  		width: 100%;
  		max-width: 800px;
  		height: auto;
  		margin: 0 auto;
		}

		img {
  		width: 100%;
  		height: 100%;
  		max-height: 250px;
  		border-radius: 4px;
		}

		.jumbotron {
    	padding-bottom: 20px;
    	padding-top: 20px;
    	border-radius: 4px;
		}

		.productos-tienda {
    	display: block;
    	width: 100%;
    	height: auto;
		}

		.productos-header {
    	width: 100%;
    	height: auto;
    	min-height: 40px;
    	margin: auto;
    	margin-bottom: 10px;
    	border-bottom: 1px solid black;
		}

		.productos-nombre-header,.productos-nombre  {
    width: calc(100% - 120px);
    	float: left;
    	text-align: left;
		}
		.productos-precio-header,.productos-precio  {
	    	width: 120px;
	    	float: left;
	    	text-align: center;
		}

		.productos {
	    	width: 100%;
	    	height: auto;
	    	min-height: 40px;
	    	margin: auto;
	    	margin-bottom: 10px;
	    	border-radius: 4px;
	    	background: #e9ecef;
	    	padding: 7px;
	    	padding-left: 10px;
		}

		.productos a {
	    	text-decoration: none;
	    	color: black;
		}
	</style>
</head>

<body>
	<div class="contenedor-general">
		<header>
			<!--BARRA DE NAVEGACION-->
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #212529;">
				<!--LOGO-->
			<a class="navbar-brand" href="../index.php"><img src="../mg/Cut_Market.png" width="100" height="52"></a>
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
								<a class="dropdown-item" href="#">Action</a>
								<div class="dropdown-divider"></div>
								<!--BOTON ***-->
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<!--BOTON ***-->
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<!--BOTON TIENDA-->
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
		<!--CONTENIDO-->
		<main>
			<div class="contenedor-inicio">

				<section >
					<?php
					$Sql = "SELECT * FROM tienda WHERE codigo_udg = '$codigo';";
					$Resul = mysqli_query($conn,$Sql);

					while ($Mostrar = mysqli_fetch_array($Resul)) {
          $IdTienda = $Mostrar['id_tienda'];
					 ?>

					<div class=contenedor-tienda>
						<div class="card text-center">
							<div class="card-header">
								<h1></h1>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="../img/donas.jpg" alt="Card image cap">
								<br>
								<h5 class="card-title"><?php echo $Mostrar['nombre'];  ?></h5>
								<div class="jumbotron">
									<p>Ubicacion: <?php echo $Mostrar['ubicacion']; ?> </p>
									<p></p>
								</div>
              <?php } ?>
								<div class="productos-tienda" >
									<div class="productos-header" >
										<div id="titulo" class="productos-nombre-header" >
											<h3>Productos</h3>
										</div>
									</div>
									<div class="productos">
											<div class="productos-nombre" style="font-size: 17px;" onclick="EnviarProducto(<?php echo $IdTienda;?>)">
												<p><span class="badge badge-secondary" style="font-size: 17px;">Agregar productos   <?php echo $IdTienda;?></span></p>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>

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

function EnviarProducto(id)
{
	location.href="/CUTMarket.V2/vistas/RegistroProducto_index.php?id="+ id ;
	//window.location.replace("http://localhost/CUTMarket.V2/vistas/tienda_index.php");
}

</script>
