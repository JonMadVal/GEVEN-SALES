<?php // include 'conect.php';?>
<?php include 'funcion/funciones.php';?>
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<title>Geven V 1.0</title>
	<!-- Latest compiled and minified CSS -->
	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->

	<link rel="stylesheet" href="/dev/vsales/css/jquery-ui.css">
	<link rel="stylesheet" href="/dev/vsales/css/bootstrap.css">
	<link rel="stylesheet" href="/dev/vsales/css/style.css">	
	<link rel="stylesheet" href="/dev/vsales/css/jquery-ui.theme.css">	
	<!-- jQuery library -->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="/dev/vsales/js/jquery-ui.js"></script>
	

	<!-- Latest compiled JavaScript -->
	<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->

	<script src="/dev/vsales/js/bootstrap.min.js"></script>
<style>
body.row {
	padding-top: 50px;
}

.col-sm-3.custom.navbar-inverse {
	height: 100%;
	position: fixed;
}

.contLoginAdmin {
/* width: 400px; */
	margin: 10px auto;
    padding: 0px;
	box-shadow: 0px 0px 8px rgba(0,0,0,0.4);
	border-radius: 5px;
	float: right;
	background: #fff;
	list-style: none;
}

.col-md-12.contAdmin {
	padding: 4%;
}
</style>	
<script>
/* $(document).ready(function(){
  $("#btnProductos").click(function(){
    $("#contAdminPpal").load('http://www.newwebcolombia.com/gv-admin/gva-productos.php');
  });
}); */
</script>
</head>

<body class="row">
	<header>
		<div class="col-md-12">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <ul class="nav navbar-nav">
      <li class="active" id="btnProductos"><a href="gva-productos.php">Productos</a></li>
      <li><a href="gva-clientes.php">Clientes</a></li>
      <li><a href="gva-pedidos.php">Pedidos</a></li>
      <li><a href="gva-garantias.php">Garantias</a></li>
      <li><a href="gva-empleados.php">Empleados</a></li>
   
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Informes<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Ventas por vendedor</a></li>
          <li><a href="#">Ventas por productos</a></li>
          <li><a href="#">Ventas por periodo de tiempo</a></li>
          <li class="divider"></li>
          <li><a href="#">Cumplimiento General</a></li>
          <li class="divider"></li>
<!--           <li><a href="#">Acción #5</a></li> -->
        </ul>
      </li>
	</ul>
	<ul class="nav nav-bar col-md-2 contLoginAdmin">
   <li><span class="glyphicon glyphicon-user" style="
    font-size: 2.6em;
    padding: 1%;  float:left" ></span></li>
      <li class="dropdown" style="float:left">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         Administrador<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Cerrar session</a></li>
<!--           <li><a href="#">Ventas por periodo de tiempo</a></li> -->
          <li class="divider"></li>
          <li><a href="#">Acerca de</a></li>
          <li class="divider"></li>
<!--           <li><a href="#">Acción #5</a></li> -->
        </ul>
      </li>
	</ul>

</nav>
			</div>

	</header>

<div class="wrapper row">