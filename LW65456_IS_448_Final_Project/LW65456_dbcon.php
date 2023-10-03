<?php
// Connection

$servername = "studentdb-maria.gl.umbc.edu";
$username = "wbicker1";
$password = "wbicker1";
$dbname = "wbicker1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>