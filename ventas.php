<!doctype html>
<html lang="es">
<head>
	<?php include "header.php";  include "php/variablesGlobales.php"; ?>
		<title>Ventas - <?= $nombreEmpresa; ?></title>
</head>
<body>
		
<div class="wrapper">
<!-- Sidebar  -->
<?php include "menu-wrapper.php" ?>
<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css?version=1.0.1">


<div id="content" class="px-md-3 px-0 pt-5">
	<!-- Contenido de la Página  -->
	<div class="card">
		<div class="card-body">
		<div class="container">
			<h2 class="purple-text text-darken-1"><ion-icon name="cube"></ion-icon> Nota de pedido</h2>
				<div class="row d-flex justify-content-between mt-5">
					<button type="button" class="btn btn-outline-danger btn-lg"><ion-icon name="cloud-outline"></ion-icon> Eliminar pedido</button>	<button type="button" class="btn btn-outline-primary btn-lg"><ion-icon name="cloud-upload"></ion-icon> Generar pedido</button>
				</div>
				<div class="line" style="margin-top: 20px 0;"></div>
				<div class="form-inline">
					<label class="mr-2" for="">Filtro de clientes:</label> <input type="text" name="" class="form-control"> <button class="btn btn-outline-primary ml-2" id="btnBuscar"><ion-icon name="search"></ion-icon></button>
				</div>
				<div class='' id="">
					<div class="line"></div>
					<h4>Datos de cliente</h4>
						<div class='d-none' id="contenidoOculto">
							<p><strong>RUC:</strong> 204385180317</p>
							<p><strong>Razón Social:</strong> Lazzy Vet S.A.C.</p>
							<p><strong>Dirección:</strong> Av. de La Cultura 748, Cusco 8000.</p>
							<div class="row">
								<div class="col-6">
									<p><strong>Dirección de entrega pedido:</strong> <input type="text" class="form-control"></p></div>
								<div class="col-6">
									<p><strong>Celular de contacto responsable:</strong> <input type="text" class="form-control"></p></div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="checkbox checkbox-success">
									<input type="checkbox" id="checkbox1" class="styled">
									<label for="checkbox1">Otorgar crédito</label>
								</div>
								</div>
								<div class="col-6 d-none" id="divFechaOculta" >
									<p><strong>Fecha de pago de crédito:</strong> <input type="date" class="form-control" id="txtFechaOculta"></p></div>
								</div>
							</div>
						</div>
					 
					<div class="line"></div>
					<h4>Datos de pedido</h4>
					<div class="form-inline">
						<label class="mr-2" for="">Filtro de productos:</label> <input type="text" name="" class="form-control"> <button class="btn btn-outline-primary ml-2" id="btnBuscarProductos"><ion-icon name="search"></ion-icon></button>
					</div>
					<p><strong>Cesta:</strong></p>
						<table class="table table-hover">
						<thead>
							<th>N°</th>
							<th>Descripción</th>
							<th>Cantidad</th>
							<th>Precio V.</th>
							<th colspan="2">SubTotal</th>
							<tr>
							</tr>
						</thead>
						<tbody id="bodyProductos">
						</tbody>
						<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th>Total</th>
							<th>S/ <span id="spanTotat">0.00</span></th>
						</tr>
						</tfoot>
						</table>
				</div>
				
				</div>
		</div> <!-- Fin de card body  -->
	</div>
		
<!-- Fin de Contenido de la Página  -->
</div>
				
<!-- Fin de #wrapper  -->
</div>

<!-- Modal -->
<div class="modal fade" id="modalLlamarClientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Clientes</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-hover">
					<thead><tr><th>N°</th>
					<th>Razón Social</th>
					<th>Celular</th>
					<th>@</th>
					</tr></thead>
					<tbody>
						<tr><td>1</td>
						<td>Lazzy Vet</td>
						<td>964692108</td><td><button class="btn btn-outline-success btnDeFiltro"><ion-icon name="add"></ion-icon></button></td></tr>
						<tr><td>2</td>
						<td>Pariona Valencia Carlos</td>
						<td>958249452</td><td><button class="btn btn-outline-success btnDeFiltro"><ion-icon name="add"></ion-icon></button></td></tr>
						<tr><td>3</td>
						<td>Dr. Patitas</td>
						<td>(084) 606829</td><td><button class="btn btn-outline-success btnDeFiltro"><ion-icon name="add"></ion-icon></button></td></tr>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalLlamarProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			
			<div class="modal-body">
				<h5 class="modal-title" id="exampleModalCenterTitle">Productos</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<table class="table table-hover table-sm">
					<thead><tr><th>N°</th>
					<th>Descrición</th>
					<th>Precio</th>
					<th>@</th>
					</tr></thead>
					<tbody>
						<tr><td>1</td>
						<td class="aDescripcion"><a href="productos.php?idProducto=15">ASUNTOL JABÓN 125gr</a></td>
						<td>S/ <span class="spanPrecio">15.50</span></td><td><button class="btn btn-outline-success btnDeProducto btn-sm"><ion-icon name="cart"></ion-icon></button></td></tr>
						<tr><td>2</td>
						<td class="aDescripcion"><a href="productos.php?idProducto=15">ALLERMYL SHAMPOO 400ml</a></td>
						<td>S/ <span class="spanPrecio">23.40</span></td><td><button class="btn btn-outline-success btnDeProducto btn-sm"><ion-icon name="cart"></ion-icon></button></td></tr>
						<tr><td>3</td>
						<td class="aDescripcion"><a href="productos.php?idProducto=15">BALSAMO BLANCO 100Gr</a></td>
						<td>S/ <span class="spanPrecio">36.20</span></td><td><button class="btn btn-outline-success btnDeProducto btn-sm"><ion-icon name="cart"></ion-icon></button></td></tr>
						<tr><td>4</td>
						<td class="aDescripcion"><a href="productos.php?idProducto=15">BACEITE DE GERMEN DE TRIGO CAJA 250gr</a></td>
						<td>S/ <span class="spanPrecio">19.70</span></td><td><button class="btn btn-outline-success btnDeProducto btn-sm"><ion-icon name="cart"></ion-icon></button></td></tr>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>

<?php include "footer.php"; ?>
<script>
$(document).ready(function () {	
	$("#sidebar").mCustomScrollbar({
		theme: "minimal-dark",
		mouseWheelPixels: 200
	});
	$('.selectpicker').selectpicker('render');
	$('.selectpicker').selectpicker('val', -1);
	$('#txtFechaOculta').val(moment().format('YYYY-MM-DD'));
});
$('#btnBuscar').click(function() {
	$('#modalLlamarClientes').modal('show');
});
$('#btnBuscarProductos').click(function() {
	$('#modalLlamarProductos').modal('show');
});
$('.btnDeFiltro').click(function() {
	$('#modalLlamarClientes').modal('hide');
	$('#contenidoOculto').removeClass('d-none');
});
$('#checkbox1').change(function() {
	$('#divFechaOculta').toggleClass('d-none');
});
$('.btnDeProducto').click(function() {
	var padre = $(this).parent().parent();
	var precio = parseFloat(padre.find('.spanPrecio').text());
	$('#bodyProductos').append(`<tr>
			<td>${$('#bodyProductos').children().length+1} </td>
			<td>${padre.find('.aDescripcion').text()}</td>
			<td><input type="number" class="form-control txtCantProducto text-center w-75 p-0 m-0" value="1" min="0"></td>
			<td >S/ <span class="precioBase">${precio.toFixed(2)}</span></td>
			<td >S/ <span class="subTotal">${precio.toFixed(2)}</span> </td>
			<td><button class="btn btn-outline-danger btn-sm border-0 float-right btnBorrarFila"><ion-icon name="close"></ion-icon></button></td>
			
		</tr>`);
	var nueTot= parseFloat($('#spanTotat').text())+precio;
	$('#spanTotat').text( nueTot.toFixed(2) )
	$('#modalLlamarProductos').modal('hide');
});
$('#bodyProductos').on('keyup', '.txtCantProducto', function (e) { 
	var padre = $(this).parent().parent();
	var cant= parseFloat( $(this).val()  );
	if( $(this).val()=='' ){
		cant=0;
	}
	var precio= parseFloat( padre.find('.precioBase').text()  );
	var subto=cant*precio;
	padre.find('.subTotal').text( subto.toFixed(2) );
	sumarSubs();
});
function sumarSubs() {
	var suma =0;
	$.each( $('.subTotal') , function(i, objeto){
		suma += parseFloat( $(objeto).text() );
	});
	$('#spanTotat').text( suma.toFixed(2) )
}
$('#bodyProductos').on('click', '.btnBorrarFila', function (e) {
	$(this).parent().parent().remove();
	sumarSubs();
});
</script>
</body>
</html>