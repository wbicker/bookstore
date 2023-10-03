<head><title> Display Data </title> 
<link rel=stylesheet href=css/LW65456_style.css> 
</head>

<?php
include 'LW65456_member.php';


require 'LW65456_dbcon.php';

$sql = "SELECT catid, catname FROM  LW65456_tblcategory";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
<a href=LW65456_ncat.php > Add New Category         ---     <A Href=LW65456_page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Category table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Category_ID </TD><TD> Category_Name </TD><TD> </TD> <TD> Edit </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["catid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["catname"];
		echo "</TD>";
		echo "<TD>";
        echo "";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=LW65456_updatecat.php?nid=$row[catid]> <img src=image/edit.gif width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=LW65456_delcat.php?nid=$row[catid]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
		echo "</TD>";
		echo "</TR>";
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

$conn->close();



?>
