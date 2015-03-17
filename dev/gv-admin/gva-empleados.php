<?php include 'header.php';?>
<div class="col-md-12">

	<div class="row table-row">

		<div class="col-sm-12 optBarEmpleados">
			<ul class="list-group">
				<li class="list-group-item col-md-2 btn-succes btnEmpleados">Nuevo Empleado</li>
				<li class="list-group-item col-md-2 btn-succes btnEmpleados" id="menuSideCat"><a href="#">Roles</a>
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
.optBarEmpleados {
	padding: 1%;
	background: #FF9765;
}

.btnEmpleados {
	background: #FF5300;
	color: #fff;
	margin: 1%;
	border: 0px;
}

.btnEmpleados a {
	color: #fff;
}

.btnEmpleados:hover {
	background: #FFCDB5;
	color: #FF5300;
}

.btnEmpleados a:hover {
	color:#FF5300;
	text-decoration: none;
}

.contfunciones {
	padding: 5%;
}
</style>