<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$ca = $hl = $au = $da = $im = $de = "";

$ca = $_POST['ca'];
$hl = $_POST['hl'];
$au = $_POST['au'];
$da = $_POST['da'];
$im = $_POST['im'];
$de = $_POST['de'];


  $sql = "INSERT INTO LW65456_tblbooks (newscatid, newsheadline, newsautor, newsdate, newsimage, newsdetails )
  VALUES 
  ($ca, '$hl', '$au', '$da', '$im', '$de')";
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: LW65456_displaybook.php');
?>