<?php

require 'LW65456_dbcon.php';
$tbl_name="LW65456_members"; // Table name 



// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
$count=$result->num_rows;

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	
	header("Location: LW65456_page1.php"); /* Redirect browser */
	}
else
	{
	header("Location: LW65456_index.html"); /* Redirect browser */
exit();
}