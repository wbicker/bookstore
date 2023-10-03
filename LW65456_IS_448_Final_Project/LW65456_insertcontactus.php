<?php

require 'LW65456_dbcon.php';

$t1 = $_GET["t1"];
$c1 = $_GET["c1"];
$m1 = $_GET["m1"];
/*
echo $t1;
echo "<BR>";
echo $c1;
echo "<BR>";
echo $m1;
echo "<BR>";
*/

$sql = "insert into LW65456_tblcontactus (name, dept, message) values
 ('" . $t1. "','". $c1 . "','". $m1 ."')";

//echo $sql;
//echo "<BR>";
$conn->query($sql);

header("Location: http://localhost/LW65456_IS_448_Final_Project/LW65456_index.php");



?>


