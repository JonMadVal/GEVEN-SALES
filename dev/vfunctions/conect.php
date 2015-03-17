<?php
$mysqli = new mysqli("localhost", "newweb_gvuser", "Gv2015*", "newweb_GEVEN");
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "newweb_gvuser", "Gv2015*", "newweb_GEVEN", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
