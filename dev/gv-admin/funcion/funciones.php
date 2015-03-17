<?

function listarCategorias (){
$sqlcate= "SELECT 'elecciones para complacer a todos.' AS _msg FROM DUAL";
	
 $resultado = query($mysqli, $sqlcate);

echo $resultado;
	/* $resultado = $mysqli->query("SELECT * FROM tbl_categorias");
$fila = $resultado->fetch_assoc();
echo $fila; */
	
} 
?>