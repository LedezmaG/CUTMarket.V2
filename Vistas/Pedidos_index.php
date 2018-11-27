<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sing in</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.3/dist/css/bootstrap.min.css">
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
					<a class="navbar-brand" href="../index.php"><img src="../ig/Cut_Market.png" width="100px" height="52"></a>
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
			<br><br><br><br>
			<main>
				<!--TITULO-->
				<h2>Pedidos</h2>
				<!--PEDIDOS-->
				<div class="contenedor-pedidos">
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
					<div class="pedidos">
						<h4 id="cliente">Nombre Cliente</h4>
						<div class="dropdown-divider"></div>
						<p id="pedido">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</main>
			<footer>
				<p class="mt-5 mb-3 text-muted" style="text-align: center;">Copyright &copy; CUTMarket 2018-2019</p>
			</footer>
		</div>
	</body>
</html>
