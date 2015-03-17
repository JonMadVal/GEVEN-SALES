<?php include 'header.php';?>
<div class="container">
	<div class="fluid-container">
		<div class="col-xs-12 col-sm-12 col-md-12 alert alert-danger contTitSeccion">
			<h1>Productos | <small>Consulta todos los productos</small></h1> 
		</div>
		<div class="col-md-12 actionButton">
			<div class="col-md-5">
				<div class="col-md-6 contActionList">
					<select class="form-control">
						<option>
							Crear pedido
						</option>
						<option>
							Reportar precio
						</option>
					</select>
				</div>
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">Ejecutar</button>
			</div>
			<div class="col-md-7">
				<form class="navbar-form pull-right formFuncion" role="search">
					<span>
						 Organizar por:
					</span>
					<select class="form-control">
						<option>
							Organizacion
						</option>
						<option>
							Contacto
						</option>
					</select>
					<select class="form-control">
						<option>
							A-Z
						</option>
						<option>
							Z-A
						</option>
					</select>

					<div class="input-group">
						<input type="text" class="form-control" placeholder="Busqueda rapida" name="q">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<li class="glyphicon glyphicon-search">
								</li>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-sm-12">
			<div class="col-xs-12 col-sm-12 col-md-12 contIntItem ">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Img Pdcto</th>
						<th>Producto</th>
						<th>Categoria</th>
						<th></th>
					</tr>
					<tr>
						<td>03341</td>
						<td>
							<img src="./images/llanta-maxxis-ma-z4s-victra.jpg" alt="..." class="img-thumbnail">
						</td>
						<td>Maxxis MA-Z4S Victra 205/60ZR15</td>
						<td>Automovil | Alto Desempeno</td>
						<td>
							<table>
								<tr>
									<td>
										<input type="text" class="control-form" placeholder="Cantidad">
									</td>
								</tr>
								<tr>
									<td>
										<buttton class="btn btn-info col-md-12">Al Pedido</buttton>
									</td>
								</tr>
						</td>
						</table>
					</tr>
					<tr>
						<td>3442</td>
						<td>
							<img src="./images/llanta-maxxis-ma-z4s-victra.jpg" alt="..." class="img-thumbnail">
						</td>
						<td>Maxxis MA-Z4S Victra 205/60ZR16</td>
						<td>Automovil | Alto Desempeno</td>
						<td>
							<table>
								<tr>
									<td>
										<input type="text" class="control-form" placeholder="Cantidad">
									</td>
								</tr>
								<tr>
									<td>
										<buttton class="btn btn-info col-md-12">Al Pedido</buttton>
									</td>
								</tr>
						</td>
						</table>
					</tr>
					<tr>
						<td>3443</td>
						<td>

							<img src="./images/llanta-maxxis-ma-z4s-victra.jpg" alt="..." class="img-thumbnail">
						</td>
						<td>Maxxis MA-Z4S Victra 205/60ZR17</td>
						<td>Automovil | Alto Desempeno</td>
						<td>
							<table>
								<tr>
									<td>
										<input type="text" class="control-form" placeholder="Cantidad">
									</td>
								</tr>
								<tr>
									<td>
										<buttton class="btn btn-info col-md-12">Al Pedido</buttton>
									</td>
								</tr>
						</td>
						</table>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>