
<?php
include_once('conect.php');

if (!$conn->query("CALL spCrearCategoria('$_REQUEST[nomCate]','$_REQUEST[img]','$_REQUEST[catePadre]','')"))
{
    echo "Falló CALL: (" . $conn->errno . ") " . $conn->error;
	
}
echo  $_REQUEST[nomCate];
echo $_REQUEST[img];
echo  $_REQUEST[catePadre];
?>