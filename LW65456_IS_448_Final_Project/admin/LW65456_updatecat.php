<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['nid'];
$sql = "SELECT catname FROM  LW65456_tblcategory where catid=$id";
$result = $conn->query($sql);
$conn->query($sql);
$row = $result->fetch_assoc();

echo "<Center>";
echo "<H1> Update Category Data </H1>";
echo "<Form action=LW65456_updateinsertcat.php method=post>";
echo "<input type=hidden name=id value=$id>";
echo "<H3> Name <Input type=text name=cn value=". $row['catname'] ."> <Br>";
echo "<Input type=submit value=Submit>";
echo "</Form>";
echo "</Center>";

$conn->close();

?>