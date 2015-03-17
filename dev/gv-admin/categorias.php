<?php include_once('funcion/conect.php'); ?>

		<div class="col-md-6">
			<form method="POST" id="creaCateForm" enctype="multipart/form-data" >
				<input class="form-control" type="text" name="nomCate" placeholder="Nombre Categoria" >
					<select class="form-control" name="catePadre" id="catPadreCont">
						<option value="0">Principal</option>
						<option value="1">Marcas</option>
						<option value="2">Aplicacion</option>	
					</select>
				<input type="file" name="img" >
				<input type="submit" value="crear"  name="crear" id="creaBtn">
			</form>
		</div>
<div class="col-md-6 table-responsive">

<?php 

$sql = "SELECT * FROM tblCategoria";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table class='table table-bordered table-striped'><th>ID</th><th>Nombre</th><th>Padre</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["idCategoria"]."</td><td>".$row["Nombre"]."</td><td>".$row["Padre"]."</td></tr>";
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
</div>

<script>
 $(document).on('submit',function(e) {
  var data = $("form#creaCateForm").serialize();
  $.ajax({
         data: data,
         type: "GET",
         url: "http://www.newwebcolombia.com/geven/gv-admin/funcion/crearCategoria.php",
         success: function(data){
			/* $("#contProductoInfo").load('/geven/gv-admin/categorias.php');*/              
			 alert("Data Save: " + data);
			  
         }
 });
}); 
</script>


