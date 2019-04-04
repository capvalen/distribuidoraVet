<!doctype html>
<html lang="es">
<head>
	<?php include "header.php";  include "php/variablesGlobales.php"; ?>
    <title>Créditos - <?= $nombreEmpresa; ?></title>
</head>
<body>
<style>
.bootstrap-select .dropdown-toggle .filter-option{font-family:'Icofont', 'Segoe UI';}
.bootstrap-select .btn-light{background-color: #ffffff;}
.bootstrap-select .dropdown-toggle .filter-option{    border: 1px solid #ced4da;
	border-radius: .25rem;}
#content .dropdown-item:focus, .dropdown-item:hover{
	color: #49164c;
}
</style>
<div class="wrapper">
<!-- Sidebar  -->
<?php include "menu-wrapper.php" ?>


<div id="content" class="px-md-3 px-0 pt-5">
	<!-- Contenido de la Página  -->
	<div class="card">
		<div class="card-body">
			<h2 class="purple-text text-darken-1"><ion-icon name="cube"></ion-icon> Créditos</h2>
				<p>Filtros:</p>
				<select class="selectpicker" data-live-search="true" id="sltFiltroClientes" title="&#xed12; Filtro de créditos">
					<option value="3">Créditos por vencer</option>
					<option value="2">Créditos vencidos</option>
					<option value="1">Créditos finalizados</option>
				</select>
				<input type="date" class="form-control col-3 d-inline-flex" id="txtFechaHoy">
				<div class="line"></div>
				<p>Resultados:</p>
				<div class="table-responsive">
					<table class="table table-hover d-none" id="tabla1">
					<thead>
					<tr>
						<th>N°</th>
						<th>Cliente</th>
						<th>Fecha</th>
						<th>Monto</th>
						<th>Vendedor</th>
						<th>@</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td><a href="clientes.php?idCliente=1">Veterinaria CanVet</a></td>
						<td>01/04/2019</td>
						<td>S/ 500.00</td>
						<td>Carlos</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>2</td>
						<td><a href="clientes.php?idCliente=1">Distribuciones DermaVet</a></td>
						<td>02/04/2019</td>
						<td>S/ 162.50</td>
						<td>Jimmy</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>3</td>
						<td><a href="clientes.php?idCliente=1">Clínica Veterinaria Animal Place Vet Perú</a></td>
						<td>25/03/2019</td>
						<td>S/ 263.80</td>
						<td>Carlos</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					</tbody>
					</table>

					
					<table class="table table-hover d-none" id="tabla2">
					<thead>
					<tr>
						<th>N°</th>
						<th>Cliente</th>
						<th>Venció</th>
						<th>Fecha</th>
						<th>Monto</th>
						<th>Vendedor</th>
						<th>@</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td><a href="clientes.php?idCliente=1">Clínica Veterinaria Pancho Cavero</a></td>
						<td class="red-text text-darken-1">3 meses</td>
						<td>12/01/2019</td>
						<td>S/ 36.00</td>
						<td>Jimmy</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>2</td>
						<td><a href="clientes.php?idCliente=1">Veterinaria Axel</a></td>
						<td class="red-text text-darken-1">2 meses</td>
						<td>14/02/2019</td>
						<td>S/ 91.50</td>
						<td>Carlos</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>3</td>
						<td><a href="clientes.php?idCliente=1">Agrovet Market</a></td>
						<td class="red-text text-darken-1">2 meses</td>
						<td>16/02/2019</td>
						<td>S/ 314.80</td>
						<td>Carlos</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>4</td>
						<td><a href="clientes.php?idCliente=1">Clínica Veterinaria Animal Place Vet Perú</a></td>
						<td class="red-text text-darken-1">1 semana</td>
						<td>01/04/2019</td>
						<td>S/ 314.80</td>
						<td>Jimmy</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					</tbody>
					</table>


					<table class="table table-hover d-none" id="tabla3">
					<thead>
					<tr>
						<th>N°</th>
						<th>Cliente</th>
						<th>Por vencer</th>
						<th>Fecha</th>
						<th>Monto</th>
						<th>Vendedor</th>
						<th>@</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td><a href="clientes.php?idCliente=1">Clínica Veterinaria Pancho Cavero</a></td>
						<td class="blue-text text-accent-3">en 2 meses</td>
						<td>12/06/2019</td>
						<td>S/ 36.00</td>
						<td>Jimmy</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>2</td>
						<td><a href="clientes.php?idCliente=1">Veterinaria Axel</a></td>
						<td class="blue-text text-accent-3">en 1 mes</td>
						<td>14/05/2019</td>
						<td>S/ 91.50</td>
						<td>Carlos</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>3</td>
						<td><a href="clientes.php?idCliente=1">Agrovet Market</a></td>
						<td class="blue-text text-accent-3">en 7 días</td>
						<td>10/02/2019</td>
						<td>S/ 314.80</td>
						<td>Carlos</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					<tr>
						<td>4</td>
						<td><a href="clientes.php?idCliente=1">Clínica Veterinaria Animal Place Vet Perú</a></td>
						<td class="blue-text text-accent-3">en 2 semanas</td>
						<td>18/04/2019</td>
						<td>S/ 314.80</td>
						<td>Jimmy</td>
						<td><button class="btn btn-outline-primary btn-sm"><ion-icon name="code-working"></ion-icon></button></td>
					</tr>
					</tbody>
					</table>
				</div>
		</div> <!-- Fin de card body  -->
	</div>
    
<!-- Fin de Contenido de la Página  -->
</div>
        
<!-- Fin de #wrapper  -->
</div>



<?php include "footer.php"; ?>
<script>
$(document).ready(function () {	
	$('#txtFechaHoy').val(moment().format("YYYY-MM-DD"));
	$("#sidebar").mCustomScrollbar({
		theme: "minimal-dark",
		mouseWheelPixels: 200
	});
	$('.selectpicker').selectpicker('render');
	$('.selectpicker').selectpicker('val', -1);
});
$('#sltFiltroClientes').change(function() {
	$('.table').addClass('d-none');
	switch ($('#sltFiltroClientes').val()) {
		case "1":
			$('#tabla1').removeClass('d-none');
			break;
		case "2":
			$('#tabla2').removeClass('d-none');
			break;
		case "3":
			$('#tabla3').removeClass('d-none');
			break;
		default:
			break;
	}
});
</script>
</body>
</html>