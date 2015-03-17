<?php
$servername = "localhost";
$username = "newweb_gvuser";
$password = "Gv2015*";
$dbname = "newweb_GEVEN";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/* 	$mysqli = new mysqli("localhost", "newweb_gvuser", "Gv2015*", "newweb_GEVEN");
	if ($mysqli->connect_errno) {
	echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} */
//echo $mysqli->host_info . "\n";

/* $mysqli = new mysqli("127.0.0.1", "newweb_gvuser", "Gv2015*", "newweb_GEVEN", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} */
?>
