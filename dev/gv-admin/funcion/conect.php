<?php
/* $servername = "localhost";
$username = "newweb_gvuser";
$password = "Gv2015*";
$dbname = "newweb_GEVEN";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  */
$servername = "localhost";
$username = "newweb_gvuser";
$password = "Gv2015*";
$dbname = "newweb_GEVEN_V2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
