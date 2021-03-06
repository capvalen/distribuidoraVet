<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/moment.js"></script>



<script>
$("#sidebar").mCustomScrollbar({
	theme: "minimal-dark",
	mouseWheelPixels: 200
});
$('#dismiss, .overlay').on('click', function () {
		ocultarPanel()
	});
	$('.sidebar-header').click(function(){
		ocultarPanel();
	});
	$('#btnBrand').click(function(){
		mostrarPanel();
	});
			
	function ocultarPanel(){
		$('#sidebar').removeClass('active');
		$('.overlay').removeClass('active');
			$('#sidebarCollapse').toggleClass('tieneMostrar');
		}
	function mostrarPanel(){
		$('#sidebar').addClass('active');
		$('.overlay').addClass('active');
		$('.collapse.in').toggleClass('in');
		$('a[aria-expanded=true]').attr('aria-expanded', 'false');
		$('#sidebarCollapse').toggleClass('tieneMostrar');
	}

	$('#sidebarCollapse').on('click', function () {
		if($(this).hasClass('tieneMostrar')){
			mostrarPanel();
		}else{
			ocultarPanel();
		}
                        
	});
</script>