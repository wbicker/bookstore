<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['nid'];
$sql = "SELECT newscatid, newsheadline, newsautor, newsdate, newsimage, newsdetails FROM  LW65456_tblbooks WHERE newsid=$id";
$result = $conn->query($sql);
$conn->query($sql);
$row = $result->fetch_assoc();


echo "<Center>";
echo "<H1> Update Book Data </H1>";
echo "<Form action=LW65456_updateinsertbook.php method=post>";
echo "<input type=hidden name=id value=$id>";
echo "<H3> Category <select name=bc value=". $row['newscatid'] .">";
	$sqli = "SELECT * from LW65456_tblcategory";
	$result1 = $conn->query($sqli);
	    while($row1 = $result1->fetch_assoc()) 
		{
		echo "<option value=". $row1["catid"] ."> ". $row1["catname"]." </option>";
		//echo "<option> ".  ."</option>";
		}
echo "</select>";

echo "<H3> Book Name <Input type=text name=bn value=". $row['newsheadline'] ."> </Br>";

echo "<H3> Author <Input type=text name=ba value=". $row['newsautor'] ."> </Br>";

echo "<H3> Date <Input type=date name=bd value=". $row['newsdate'] ."> </Br>";

echo "<H3> Image <Input type=text name=bimg value=". $row['newsimage'] ."> </Br>";

echo "<H3> Details <Input type=text name=bdet value=". $row['newsdetails'] ."> </Br>";

echo "<Input type=submit value=Submit>";
echo "</Form>";
echo "</Center>";

$conn->close();

?>