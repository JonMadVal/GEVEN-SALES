<?php include 'header.php';?>

<div class="col-md-12">

	<div class="row table-row">

		<div class="col-sm-12 optBar">
			<ul class="list-group">
				<li class="list-group-item col-md-2 btn-succes btnProductos">
					Nuevo Producto
				</li>	
				<li class="list-group-item col-md-2 btn-succes btnProductos" id="menuSideCat">
					<a href="#">Categorias</a>
				</li>
				<!--<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li> -->
			</ul>
		</div>

		<div class="col-sm-12 contfunciones" id="contProductoInfo">

		</div>

	</div>
</div>
<script>
	$(document).ready(function() {
	$("#menuSideCat").click(function() {
			$("#contProductoInfo").load('/dev/gv-admin/categorias.php');
});
	});
</script>
<style>
.col-sm-12.optBar {
	padding: 1%;
	background: #C1F160;
}

.btnProductos {
	background: #96D615;
	color: #fff;
	margin: 1%;
	border: 0px;
}

.btnProductos a {
	color: #fff;
}

.btnProductos:hover {
	background: #D4F199;
	color: #96D615;
}

.btProductos a:hover {
	color: #96D615;
	text-decoration: none;
}

.contfunciones {
	padding: 5%;
}
</style>
