<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$id = "";
$id = $_POST['styleid'];

$col = "";
$col = $_POST['val'];

$tag = "";
$tag = $_POST['tag'];

echo $id;
echo "<BR/>";

echo $col;
echo "<BR/>";

echo $tag;
echo "<BR/>";



$sql = "UPDATE LW65456_tblstyle SET 
							tag='$tag',
							value='$col' WHERE styleid=$id";
$conn->query($sql);


$conn->close();


header('Location:LW65456_updatestyle.php');

?>