<?php include 'header.php';?>
<div class="container">
  		<div class="fluid-container">
			
			<div class="col-xs-12 col-sm-12 col-md-12 alert alert-danger contTitSeccion">
				<h1>Clientes | <small>Crea, busca y edita clientes</small></h1>      
			    
			</div>

			<div class="col-md-12 pull-right">
				<button type="button" class="btn btn-danger active botonCliente" data-toggle="modal" data-target="#myModal">
					Agregar Cliente
				</button>
				<button type="button" class="btn btn-danger active  botonCliente" data-toggle="modal" data-target="#myModal2">
					Editar Cliente
				</button>
				<form class="navbar-form pull-right" role="search">
					 <span>
						 Organizar por:
					</span>
					<select class="form-control">
						<option>
							  Nombre Cliente
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
								<i class="glyphicon glyphicon-search">
								</i>
							</button>
						</div>
					</div>
				</form>
			</div><!--bar-search-->
			<br>
			<div class="table-responsive col-md-12">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
						</td>
						<td>
							CC_Nit
						</td>
						<td>
							tipo de cliente
						</td>
						<td>
							Nombre Cliente
						</td>
						<td>
							Representante
						</td>
						<td>
							Contacto
						</td>
						
						<td>
							Telefono
						</td>
						<td>
							Direccion
						</td>
						<td>
							Email
						</td>
					</tr>
					<tr>
						<td><input type="checkbox"></td>
						<td>1216715427</td>
						<td>Juridico</td>
						<td>New Web</td>
						<td>Carlos Emilio Hoyos Medina</td>
						<td>pedro Perez</td>
						<td>4278339</td>
						<td>calle 62c #130-65</td>
						<td>emilianohoyos10@gmail.com</td>
					</tr>
				</table>
			
			</div> <!-- tableresponsive-->
			<a href="../vsales/pedidos.php">
				<button type="button" class="btn btn-danger active botonClient2" data-toggle="modal" data-target="#">
					Generar Pedido
				</button>
			</a>	
			<a href="../vsales/garantias.php">
				<button type="button" class="btn btn-danger active botonClient2" data-toggle="modal" data-target="#" >
				Registrar garantia
				</button>
			</a>
			<a href="../vsales/citas.php">
				<button type="button" class="btn btn-danger active botonClient2" data-toggle="modal" data-target="#" href="#">
					Crear Cita
				</button>
			</a>
		</div> <!--fluid-container-->
	</div> <!--container-->


<!-- Modal agregar clientes -->
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title" id="myModalLabel">Agregar Cientes</h1>
					<p>Agrega a los clientes con la siguiente informaciòn</p>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>CC_Nit</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" class="form-control" type="text" placeholder="ID" class="input-xlarge" required="">
									</div>	
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Tipo de Cliente</span>
									</label>
									<div class="controls">
										<select class="form-control">
											<option>Persona Natural</option>
											<option>Persona Juridica</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Organizacion</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="Ingresar nombre contacto" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Representante</span>
									</label>
									<div class="controls ">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="Ingresar nombre contacto" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Contacto</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="Ingresar nombre contacto" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Telefono Fijo </span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="Ingresar numero Cedula/Nit" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">Telefono Celular</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="Ingresar telefono" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">Direccion</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="Ingresar direccion" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">Correo</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="Ingresar email" class="input-xlarge" required="">
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
						</form>  
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-danger">Guardar contacto</button>
				</div>
			</div>
  		</div>
	</div>
<!-- Modal agregar clientes end -->

<!-- Modal Editar Clientes -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Editar Cliente</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>CC_Nit</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" class="form-control" type="text" placeholder="1216715427" class="input-xlarge" required="" disabled>
									</div>	
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Tipo de Cliente</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" class="form-control" type="text" placeholder="juridico" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Organizacion</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="new Web" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Representante</span>
									</label>
									<div class="controls ">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="pablo jimenez" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Contacto</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="susana vasquez" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Telefono Fijo </span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="3664080" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">Telefono Celular</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="3182296840" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">Direccion</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="Icalle 62c #130-65" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">Correo</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="emilianohoyos10@gmail.com" class="input-xlarge" required="">
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
						</form>  
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-danger active" data-toggle="modal" data-target="#myModal3" >
  						Guardar Cambios
					</button>
				</div>
			</div>
  		</div>
</div>
<!-- Modal Editar Clientes -->
<!-- Modal Editar Confirma edicion -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
      </div>
      <div class="modal-body">
        <h3>¿Desea Guardar Los Cambios?</h3>
		  <p>no se pueden deshacer los cambios</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger active">Confirmar <span class="glyphicon glyphicon-ok"></span></button>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>

