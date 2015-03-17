<?php include 'header.php';?>
<link href="css/calendar.min.css" rel="stylesheet">
<script src="js/calendar.min.js"></script>




<div class="container">
<!-- <a href="/geven/agregarcita.php"><button type="submit" class="btn btn-default glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#myModal" id="botonagre">Agregar cita</button>
	 -->
	<!-- Button trigger modal -->

<iframe src="https://www.google.com/calendar/embed?src=es-419.co%23holiday%40group.v.calendar.google.com&ctz=America/Bogota" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
<!-- Modal agregar cita -->
<div class="modal fade" id="addCita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">AgregarCita</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-6 col-sm-6 col-xs-12 cont ">

	<table class="table table-striped table-bordered" >
		 <tr>
			 <label for="asun"> <strong> Asunto</strong> </label>
			<input type="text" class="form-control" placeholder="asunto de la cita">
		 </tr>
		 <tr>
			<label for="hora"><strong>Hora</strong></label>
			 <input type="time" name="hora" class="form-control" value="00:00:00" max="23:30:00" min="1:00:00" step="1">
		 </tr>
		 <tr>
			<label for="desc"><strong>Descripcion</strong></label>
			 <textarea class="form-control" rows="3" placeholder="Breve descripcion de la cita"></textarea>
		 </tr>
		 <tr>
			<label for="alert"><strong>Alarma Notificacion</strong></label></br>
			 Fecha alerta
			 <input class="form-control" name="fecha" type="text" size="10" maxlength="10" onKeyUp = "this.value=formateafecha(this.value);">
			Hora de alerta
			<input type="time" name="hora" class="form-control" value="00:00:00" max="23:30:00" min="1:00:00" step="1">
		 </tr>
	</table>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal editar cita -->
<div class="modal fade" id="editCita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar cita</h4>
      </div>
      <div class="modal-body">
     <div class="col-md-6 col-sm-6 col-xs-12 cont ">

	<table class="table table-striped table-bordered" >
			 <tr>
				 <label for="asun"> <strong> Asunto</strong> </label>
				<input type="text" class="form-control" placeholder="asunto de la cita">
			 </tr>
			 <tr>
				<label for="hora"><strong>Hora</strong></label>
				 <input type="time" name="hora" class="form-control" value="00:00:00" max="23:30:00" min="1:00:00" step="1">
			 </tr>
			 <tr>
				<label for="desc"><strong>Descripcion</strong></label>
				 <textarea class="form-control" rows="3" placeholder="Breve descripcion de la cita"></textarea>
			 </tr>
			 <tr>
				<label for="alert"><strong>Alarma Notificacion</strong></label></br>
				 Fecha alerta
				 <input class="form-control" name="fecha" type="text" size="10" maxlength="10" onKeyUp = "this.value=formateafecha(this.value);">
				Hora de alerta
				<input type="time" name="hora" class="form-control" value="00:00:00" max="23:30:00" min="1:00:00" step="1">
			 </tr>
		</table>
	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal editar cita -->
<div class="modal fade" id="cancelCita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cancelar citas</h4>
      </div>
      <div class="modal-body">
     	<table class="table table-condensed table-striped">
					  <tr>
						  <th>Fecha</th>
						  <th>Cliente</th>
						  <th>Detalles</th>
						  <th></th>
						 
					  </tr>
					  <tr>
					  	<td>002</td>
					  	<td>Llantas y Llantas</td>
						  
					  	<td>21-Feb-2014</td>
					  	<td><button type="button" class="btn btn-default cancelar"> <span id="text">Cancelar citas</span></button></td>
					  </tr>
					  <tr>
					  	<td>003</td>
					  	<td>Llantas y Rines</td>
					  	<td>18-Feb-2014</td>
					  	<td><button type="button" class="btn btn-default cancelar"> <span id="text">Cancelar citas</span></button></td>
					  </tr>
					  <tr>
					  	<td>004</td>
					  	<td>Llantas y Repuestos</td>
					  	<td>17-Feb-2014</td>
						  <td><button type="button" class="btn btn-default cancelar"> <span id="text">Cancelar citas</span></button></td>
					  	
					  </tr>
					  <tr>
					  	<td>005</td>
					  	<td>Llantas y Mas</td>
					  	<td>6-Feb-2014</td>
						  <td><button type="button" class="btn btn-default cancelar"> <span id="text">Cancelar citas</span></button></td>
					  	
					  </tr>
       				  
                  </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
	<div class="col-md-3  botones">
		<button type="button" class="btn btn-default glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#addCita" id="botonagre"> Agregar cita</button>
		<button type="button" class="btn btn-default glyphicon glyphicon-edit " data-toggle="modal" data-target="#editCita" id="botonedit"> Editar cita</button>
		<button type="button" class="btn btn-default glyphicon glyphicon-remove-sign "data-toggle="modal" data-target="#cancelCita" id="botoncancel">Cancelar cita</button>
	</div>
	 <script>
	var yy;
	var calendarArray =[];
	var monthOffset = [6,7,8,9,10,11,0,1,2,3,4,5];
	var monthArray = [["ENE","enero"],["FEB","Febrero"],["MAR","Marzo"],["ABR","Abril"],["MAY","Mayo"],["JUN","Junio"],["JUL","Julio"],["AGO","Agosto"],["SEP","Septiembre"],["OCT","Octubre"],["NOV","Noviembre"],["DIC","Diciembre"]];
	var letrasArray = ["L","M","X","J","V","S","D"];
	var dayArray = ["7","1","2","3","4","5","6"];
	$(document).ready(function() {
		$(document).on('click','.calendar-day.have-events',activateDay);
		$(document).on('click','.specific-day',activatecalendar);
		$(document).on('click','.calendar-month-view-arrow',offsetcalendar);
		$(window).resize(calendarScale);
		$(".calendar").calendar({
			"2013910": {
				"Mulberry Festival": {
					start: "9.00",
					end: "9.30",
					location: "London"
				}
			}
		});
		calendarSet();
		calendarScale();
		});
	</script>
	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-266167-20");
		pageTracker._setDomainName(".martiniglesias.eu");
		pageTracker._trackPageview();
	} catch(err) {}</script>
<div class="calendar" data-color="normal">
	<div data-role="day" data-day="<?php echo date("Ynd",mktime(0,0,0,date("m"),date("d")+1,date("Y"))); ?>">
		<div data-role="event" data-name="Soy un evento que siempre saldr&eacute; ma&ntilde;ana" data-start="9.00" data-end="9.30" data-location="martiniglesias.eu">
		</div>
	</div>
</div>
	

<!-- 	<iframe src="http://www.keepandshare.com/calendar/show_month.php?i=889231&ifr=y&date=2010-03-08" width="650" height="700" scrolling="no" frameborder="1"></iframe> -->
  <div class="col-xs-12 col-sm-12 col-md-4 alert alert-danger procit">
				<div class="col-xs-12 col-sm-12 col-md-12 contItemTitulo">
					<span class="badge">42</span><h3>Proximas citas</h3>
			    </div>
				<div class="col-sm-12 col-xm-12 col-md-12">
				  <table class="table table-condensed table-striped">
					  <tr>
						  <th>Fecha</th>
						  <th>Cliente</th>
						  <th>Detalles</th>
						 
					  </tr>
					  <tr>
					  	<td>002</td>
					  	<td>Llantas y Llantas</td>
					  	<td>21-Feb-2014</td>
					  	
					  </tr>
					  <tr>
					  	<td>003</td>
					  	<td>Llantas y Rines</td>
					  	<td>18-Feb-2014</td>
					  	
					  </tr>
					  <tr>
					  	<td>004</td>
					  	<td>Llantas y Repuestos</td>
					  	<td>17-Feb-2014</td>
					  	
					  </tr>
					  <tr>
					  	<td>005</td>
					  	<td>Llantas y Mas</td>
					  	<td>6-Feb-2014</td>
					  	
					  </tr>
  
                  </table>
				</div>				
			</div>

</div>
<?php include 'footer.php';?>