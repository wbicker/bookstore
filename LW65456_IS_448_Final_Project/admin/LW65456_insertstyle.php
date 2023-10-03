<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$tag = $hex =  "";

$tag = $_POST['tag'];
$hex = $_POST['hex'];



  $sql = "INSERT INTO LW65456_tblstyle (tag, value)
  VALUES 
  ('$tag', '$hex')";
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: LW65456_updatestyle.php');
?>