<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$catname = "";

$catname = $_POST['cn'];

  $sql = "INSERT INTO LW65456_tblcategory (catname) VALUES ('$catname')";
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: LW65456_displaycat.php');
?>