<?php include 'header.php';?>
<div class="col-md-12">

	<div class="row table-row">

		<div class="col-sm-12 optBarPedidos">
			<ul class="list-group">
				<li class="list-group-item col-md-2 btn-succes btnPedidos">Nuevo Pedido</li>
<!-- 				<li class="list-group-item col-md-2 btn-succes btnPedidos" id="menuSideCat"><a href="#">Estado Cartera</a> -->
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
.optBarPedidos {
	padding: 1%;
	background:#9E71A8;
}

.btnPedidos {
	background: #481054;
	color: #fff;
	margin: 1%;
	border: 0px;
}

.btnPedidos a {
	color: #fff;
}

.btnPedidos:hover {
	background: #80488C;
	color: #2E0138;
}

.btnPedidos a:hover {
	color:#2E0138;
	text-decoration: none;
}

.contfunciones {
	padding: 5%;
}
</style>