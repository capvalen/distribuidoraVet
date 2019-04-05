<!doctype html>
<html lang="es">
<head>
	<?php include "header.php";  include "php/variablesGlobales.php"; ?>
    <title>Clientes - <?= $nombreEmpresa; ?></title>
</head>
<body>
    
<div class="wrapper">
<!-- Sidebar  -->
<?php include "menu-wrapper.php" ?>


<div id="content" class="px-md-3 px-0 pt-5">
  <!-- Contenido de la Página  -->
  <div class="card">
    <div class="card-body">
      <h2 class="purple-text text-darken-1"><i class="icofont-users-alt-1"></i> Clínica Veterinaria Pancho Cavero <small>Cliente</small></h2>
        <p>RUC: 20602657486</p>
        <p>Dirección: Av. República de Panamá 6584 - Lima</p>
        <p>Teléfono: (01) 4466179</p>
        <p>Correo: informes@pachovet.com</p>
        <p>Celular de contacto: 936 283 095 (Alex)</p>
        <p>Antigüedad: 2 meses</p>
    
        <div class="line"></div>
    
        <h2>Ficha de créditos</h2>
        <div class="table-responsive">
          <table class="table table-hover">
          <thead>
            <tr>
              <th>N°</th>
              <th>Estado</th>
              <th>Fecha</th>
              <th>Monto</th>
              <th>Vendedor</th>
              <th>@</th>
            </tr>
					</thead>
          <tbody>
            <tr>
              <td>1</td>
              <td class="red-text text-darken-1">Vence 3 meses</td>
              <td>12/06/2019</td>
              <td>S/ 36.00</td>
              <td>Jimmy</td>
              <td><button class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalle"><ion-icon name="code-working"></ion-icon></button></td>
            </tr>
            <tr>
              <td>2</td>
              <td class="blue-text text-accent-3">Cobrado</td>
              <td>14/02/2019</td>
              <td>S/ 91.50</td>
              <td>Carlos</td>
              <td><button class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalle"><ion-icon name="code-working"></ion-icon></button></td>
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
	$("#sidebar").mCustomScrollbar({
		theme: "minimal-dark",
		mouseWheelPixels: 200
	});
	$('.selectpicker').selectpicker('render');
	$('.selectpicker').selectpicker('val', -1);
  $('button[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>