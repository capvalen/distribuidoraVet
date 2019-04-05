<?php $nomArchivo = basename($_SERVER['PHP_SELF']); ?>
<nav id="sidebar">
		<div id="dismiss" class="d-flex justify-content-center align-items-center">
				<i class="icofont-simple-left-down"></i>
		</div>

		<div class="sidebar-header">
				<img class="img-fluid" src="images/divetsa-02-01_1.png">
		</div>

		<ul class="list-unstyled components">
				<p class="text-center"><small>Versión 0.1</small></p>
				<li <?php if($nomArchivo =='principal.php') echo 'class="active"'; ?>>
						<a href="principal.php" class="d-flex align-items-center"><ion-icon name="home"></ion-icon> <span class="liText">Principal</span></a>
				</li>

				<li <?php if($nomArchivo =='productos.php') echo 'class="active"'; ?>>
						<a href="productos.php" class="d-flex align-items-center"><ion-icon name="cube"></ion-icon> <span class="liText">Productos</span></a>
				</li>
				<li>
						<a href="#" class="d-flex align-items-center"><ion-icon name="cart"></ion-icon> <span class="liText">Caja</span></a>
				</li>
				<li <?php if($nomArchivo =='creditos.php') echo 'class="active"'; ?>>
						<a href="creditos.php" class="d-flex align-items-center"><ion-icon name="paper"></ion-icon> <span class="liText">Créditos</span></a>
				</li>
				<li <?php if($nomArchivo =='ventas.php') echo 'class="active"'; ?>>
						<a href="ventas.php" class="d-flex align-items-center"><ion-icon name="cart"></ion-icon> <span class="liText">Ventas</span></a>
				</li>
				<li>
						<a href="#" class="d-flex align-items-center"><ion-icon name="document"></ion-icon> <span class="liText">Reportes</span></a>
				</li>
				<li>
						<a href="#" class="d-flex align-items-center"><ion-icon name="medal"></ion-icon> <span class="liText">Verificación</span></a>
				</li>
				<li>
						<a href="#" class="d-flex align-items-center"><ion-icon name="gift"></ion-icon> <span class="liText">Almacén</span></a>
				</li>
				<li>
						<a href="#" class="d-flex align-items-center"><ion-icon name="options"></ion-icon> <span class="liText">Configuraciones</span></a>
				</li>
		</ul>
</nav>
<!-- Fin Sidebar  -->
			
<!--Barra de Menú-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #a35bb4">
	<div class="container-fluid">
		<button type="button" id="sidebarCollapse" class="btn btn-outline-light tieneMostrar mr-3 px-2" >
				<i class="icofont-navigation-menu"></i>
		</button>
										
		<a class="navbar-brand" href="#!" id="btnBrand">
			<img src="images/logoCorto.png" width="35" height="35" class="d-inline-block align-top" alt="">
			Infocat Soluciones
		</a>
		<button class="btn btn-outline-light d-inline-block d-lg-none ml-auto px-2" id="btnSubNavegacion" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="icofont-caret-down"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav ml-auto">
					<li class="nav-item d-none">
							<a class="nav-link" href="#"> Mi perfil</a>
					</li>
				
				<li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="settings"></ion-icon> Opciones</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown07">
						<a class="dropdown-item" href="#">Mi perfil</a>
						<a class="dropdown-item" href="#">Cerrar sesión</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--Fin de barra de menú-->
<div class="overlay"></div>