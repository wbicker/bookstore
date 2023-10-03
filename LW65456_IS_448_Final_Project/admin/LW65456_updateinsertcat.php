<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$catname = "";
$id = "";
$id = $_POST['id'];
$catname = $_POST['cn'];
echo $id;
echo "<BR>";
echo $catname;

$sql = "update LW65456_tblcategory set catname='$catname' Where catid=$id";
$conn->query($sql);

$conn->close();


header('Location: LW65456_displaycat.php');

?>