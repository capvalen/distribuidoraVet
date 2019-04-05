<!doctype html>
<html lang="es">
<head>
	<?php include "header.php";  include "php/variablesGlobales.php"; ?>
    <title>Productos - <?= $nombreEmpresa; ?></title>
</head>
<body>
    
<div class="wrapper">
<!-- Sidebar  -->
<?php include "menu-wrapper.php" ?>


<div id="content" class="px-md-3 px-0 pt-5 ">
    <!-- Contenido de la Página  -->
		<div class="card">
			<div class="card-body">
			<?php if(!isset($_GET['idProducto'])): ?>
				<h2 class="purple-text text-darken-1"><ion-icon name="cube"></ion-icon> Productos</h2>
				<p>Listado de productos</p>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>N°</th>
								<th>Descripción de producto</th>
								<th>Precio</th>
								<th>Stock</th>
								<th>@</th>
							</tr>
						</thead>
						<tbody>
						<tr>
								<td>1</td>
								<td><a href="productos.php?idProducto=15">ACEITE DE GERMEN DE TRIGO CAJA 250gr</a></td>
								<td>S/ 50.50</td>
								<td>9</td>
								<td><a href="productos.php?idProducto=15" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Ver más"><ion-icon name="code-working"></ion-icon></a></td>
							</tr>
							<tr>
								<td>2</td>
								<td><a href="productos.php?idProducto=15">ASUNTOL JABÓN 125gr</a></td>
								<td>S/ 21.90</td>
								<td>15</td>
								<td><a href="productos.php?idProducto=15" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Ver más"><ion-icon name="code-working"></ion-icon></a></td>
							</tr>
							<tr>
								<td>3</td>
								<td><a href="productos.php?idProducto=15">ALLERMYL SHAMPOO 400ml</a></td>
								<td>S/ 14.50</td>
								<td>13</td>
								<td><a href="productos.php?idProducto=15" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Ver más"><ion-icon name="code-working"></ion-icon></a></td>
							</tr>
							<tr>
								<td>4</td>
								<td><a href="productos.php?idProducto=15">BALSAMO BLANCO 100Gr</a></td>
								<td>S/ 31.80</td>
								<td>53</td>
								<td><a href="productos.php?idProducto=15" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Ver más"><ion-icon name="code-working"></ion-icon></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			<?php endif; if(isset($_GET['idProducto'])): ?>
				<h3 class="purple-text text-darken-1"><ion-icon name="cube"></ion-icon> ACEITE DE GERMEN DE TRIGO CAJA 250gr</h3>
				<div class="px-4">
					<p><strong>Categoría:</strong> <span>INYECTABLE </span></p>
					<p><strong>Descripción:</strong> <span>VITAMINA E </span></p>
					<p><strong>Stock:</strong> <span>9 Unds. </span></p>
					<p><strong>Precio:</strong> <span>S/ 50.50 </span></p>
					<p><strong>Aplicable a:</strong> <span>CABALLOS, GALLOS, GANADO, MASCOTAS, PORCINOS</span></p>
					<button class="btn btn-outline-dark"><ion-icon name="pulse"></ion-icon> Modificar detalles</button>
					<button class="btn btn-outline-warning"><ion-icon name="pulse"></ion-icon> Modificar stock</button>
					<button class="btn btn-outline-success"><ion-icon name="add-circle-outline"></ion-icon> Agregar a la cesta</button>
				</div>
			<?php endif; ?>
				
			</div> <!-- Fin de card body  -->
		</div>

    
<!-- Fin de Contenido de la Página  -->
</div>
        
<!-- Fin de #wrapper  -->
</div>



<?php include "footer.php"; ?>
<script>
$('button[data-toggle="tooltip"]').tooltip();
</script>
  </body>
</html>