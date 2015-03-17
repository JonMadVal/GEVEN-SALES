<?php include 'header.php';?>
<div class="col-md-12">

	<div class="row table-row">

		<div class="col-sm-12 optBarClientes">
			<ul class="list-group">
				<li class="list-group-item col-md-2 btn-succes btnClientes">Nuevo Cliente</li>
				<li class="list-group-item col-md-2 btn-succes btnClientes" id="menuSideCat"><a href="#">Estado Cartera</a>
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
			$("#contProductoInfo").load('http://www.newwebcolombia.com/geven/gv-admin/categorias.php');
});
	});
</script>
<style>
.optBarClientes {
	padding: 1%;
	background: #55D7D7;
}

.btnClientes {
	background: #034A4A;
	color: #fff;
	margin: 1%;
	border: 0px;
}

.btnClientes a {
	color: #fff;
}

.btnClientes:hover {
	background: #89D7D7;
	color: #034A4A;
}

.btnClientes a:hover {
	color:#034A4A;
	text-decoration: none;
}

.contfunciones {
	padding: 5%;
}
</style>