<?php include 'header.php';?>
<div class="container">
		<div id="titulo">
			<h1>Garantias</h1> 
 		 </div>
		<div class="col-md-5 garantias">
			<div class="botones col-md-5">
				<button type="button" class="btn btn-danger active" data-toggle="modal" data-target="#myModal">
				 Registrar Garantia
				</button>
				<button type="button" class="btn btn-danger active" data-toggle="modal" data-target="#myModal2">
 				Consultar Garantia
				</button>
			</div>
			<div class="images">
				<img src="/geven/vsales/images/bridgestone.jpg" alt="logo" >
				<img src="/geven/vsales/images/dunlop.jpg" alt="logo" >
				<img src="/geven/vsales/images/firestone.jpg" alt="logo" >
				<img src="/geven/vsales/images/general.jpg" alt="logo">
				<img src="/geven/vsales/images/michelin.jpg" alt="logo" >
			</div>
		</div>
		<div class="col-md-5 imagen">
			<img src="/geven/vsales/images/mecanico.png" alt="mecanico"> 
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registrar Garantia</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Codigo pedido </span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" class="form-control" type="text" placeholder="ID" class="input-xlarge" required="">
									</div>	
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>codigo Cliente</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" class="form-control" type="text" placeholder="ID" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>fecha solicitud</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="Ingresar nombre contacto" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Estado</span>
									</label>
									<div class="controls ">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="Ingresar nombre contacto" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>Cantidad</span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text"class="form-control" placeholder="Ingresar nombre contacto" class="input-xlarge" required="">
									</div>
								</div>
								<div class="control-group col-md-6">
									<label class="control-label" for="textinput">
										<span>fecha respuesta </span>
									</label>
									<div class="controls">
										<input id="textinput" name="textinput" type="text" class="form-control" placeholder="Ingresar numero Cedula/Nit" class="input-xlarge" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="control-group col-md-12">
									<label class="control-label" for="textinput">observaciones</label>
									<div class="controls">
										<textarea id="textinput" name="textinput" type="text" class="form-control" placeholder="Describa la solicitud" class="input-xlarge" required=""></textarea>
									</div>
								</div>
							</div>
						</form>  
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-danger">registrar solicitud</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal 2-->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">consultar Garantia</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="control-group col-md-6">
								<label for="">buscar por: </label>
								<select name="buqueda garantia" class="form-control">
									<option value="1">Codigo garantia</option>
									<option value="2">CC ó NIT</option>
								</select>
							</div>
							<div class="control-group col-md-6">
								<label for="">Ingrese codigo</label>
								<input id="textinput" name="textinput" type="text" class="form-control" placeholder="" class="input-xlarge" required="">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-danger">registrar solicitud</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>








