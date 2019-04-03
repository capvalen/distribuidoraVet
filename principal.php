<!doctype html>
<html lang="es">
<head>
	<?php include "header.php";  include "php/variablesGlobales.php"; ?>
    <title>Principal - <?= $nombreEmpresa; ?></title>
</head>
<body>
    
<div class="wrapper">
<!-- Sidebar  -->
<?php include "menu-wrapper.php" ?>


<div id="content" class="px-md-3 px-0 pt-5 ">
    <!-- Contenido de la Página  -->
		<div class="card">
			<div class="card-body">
				<center>
				<img src="images/encabezado2.png" alt="" class="img-fluid"><br><br>
				</center>
				<h2 class="purple-text text-darken-1"><ion-icon name="finger-print"></ion-icon> Bienvenido al sistema</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<div class="line"></div>

				<h2 class="purple-text text-darken-1">Misión</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="line"></div>

				<h2 class="purple-text text-darken-1">Visión</h2>
				<p>Lorem ipsum dolouat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

    
<!-- Fin de Contenido de la Página  -->
</div>
        
<!-- Fin de #wrapper  -->
</div>



<?php include "footer.php"; ?>
  </body>
</html>