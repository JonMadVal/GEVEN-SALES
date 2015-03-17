<?php include 'header.php';?>
<div class="col-md-12">

	<div class="row table-row">

		<div class="col-sm-12 optBarGarantia">
			<ul class="list-group">
				<li class="list-group-item col-md-2 btn-succes btnGarantia">Nueva Garantia</li>
<!-- 				<li class="list-group-item col-md-2 btn-succes btnGarantia" id="menuSideCat"><a href="#">Estado Cartera</a> -->
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
.optBarGarantia {
	padding: 1%;
	background: #FFED6B;
}

.btnGarantia {
	background: #E9D125;
	color: #fff;
	margin: 1%;
	border: 0px;
}

.btnGarantia a {
	color: #fff;
}

.btnGarantia:hover {
	background: #FFF18F;
	color: #E9D125;
}

.btnGarantia a:hover {
	color:#E9D125;
	text-decoration: none;
}

.contfunciones {
	padding: 5%;
}
</style>