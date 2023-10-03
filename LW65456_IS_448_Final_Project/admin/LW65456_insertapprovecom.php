<?php

require 'LW65456_dbcon.php';

// define variables and set to empty values
$id = "";
$id = $_POST['id'];

$cm = "";
$cm = $_POST['com'];

   
echo $id;	
echo "</br>"; 
echo $cm;
echo "</br>";

	   
  $sql = "INSERT INTO LW65456_approvecomment (newsid, comment )
  VALUES 
  ($id, '$cm')";
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: http://localhost/LW65456_IS_448_Final_Project/LW65456_index.php');
?>