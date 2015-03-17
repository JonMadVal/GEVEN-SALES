<?php include 'header.php';?>
	<div class="contLogin row">
		<div class="titulo">
			<h2>
				Bienvenido a GEVEN
			</h2>
		</div>
		<div class="col-md-12">
		
		<form role="form">
  			<div class="form-group col-md-12 user">
   				<span class="glyphicon glyphicon-user" ></span>
    			<label for="usuario">Usuario</label>
    			<input type="text" class="form-control" id="usuario">
  			</div>
			<div class="form-group col-md-12 clave">
				 <span class="glyphicons glyphicons-keys"></span>
				 <label for="pwd">Clave</label>
				 <input type="password" class="form-control" id="pwd">
			 </div>
 			
			<div class="col-md-12">
				 <div class="checkbox">
    				<label><input type="checkbox"> Recordar mis datos</label>
  				</div>
				<button type="submit" class="btn btn-danger active btn-block iniciosesion">Iniciar Sesión</button>
				<br>
				<br>
				<a href="/geven/recoveryacount.php" class="btn btn-danger active btn-block" role="button">
						<span>Recordar mi contraseña</span>
				</a>
			</div>
			</form>
    	</div>
	</div>
<?php include 'footer.php';?>