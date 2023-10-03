<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$id = "";
$id = $_POST['id'];

$bcat = "";
$bcat = $_POST['bc'];

$bname = "";
$bname = $_POST['bn'];

$baut = "";
$baut = $_POST['ba'];

$bdate = "";
$bdate = $_POST['bd'];

$bimg = "";
$bimg = $_POST['bimg'];

$bdet = "";
$bdet = $_POST['bdet'];

echo $id;

echo "<BR/>";
echo $bcat;

echo "<BR/>";
echo $bname;

echo "<BR/>";
echo $baut;

echo "<BR/>";
echo $bdate;

echo "<BR/>";
echo $bimg;

echo "<BR/>";
echo $bdet;


$sql = "UPDATE LW65456_tblbooks SET 
							newscatid='$bcat', 
							newsheadline='$bname',
							newsautor='$baut',
							newsdate='$bdate',
							newsimage='$bimg',
							newsdetails='$bdet' WHERE newsid=$id";
$conn->query($sql);


$conn->close();


header('Location: LW65456_displaybook.php');

?>