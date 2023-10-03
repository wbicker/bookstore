<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$id = "";
$id = $_POST['id'];

$choice = "";
$choice = $_POST['sh'];

$hide = "Hidden";
		
		
	if ($choice == 1){
		$sql = "UPDATE LW65456_tblcomment SET comment = $hide WHERE commentid=$id";
		$conn->query($sql);
		
	} else {
		$sql = "UPDATE LW65456_tblcomment SET comment = comment WHERE commentid=$id";
		$conn->query($sql);
	}

//if statement to ask the admin if they want to add to table
//if showhide = 1, add to table
//if showhide = 2, nothing 


// define variables and set to empty values


	$conn->close();
	
	header('Location: LW65456_displaycom.php');

?>