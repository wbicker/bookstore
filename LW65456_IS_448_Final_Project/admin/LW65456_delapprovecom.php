<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['nid'];
$sql = "Delete FROM LW65456_approvecomment WHERE id=$id";

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: LW65456_newcom.php');

?>