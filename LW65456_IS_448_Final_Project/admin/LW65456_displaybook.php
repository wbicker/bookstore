<head><title> Display Books </title> 
<link rel=stylesheet href=css/LW65456_style.css> 
</head>


<?php
include 'LW65456_member.php';


require 'LW65456_dbcon.php';

$sql = "SELECT * from LW65456_tblbooks LEFT JOIN LW65456_tblcategory ON LW65456_tblbooks.newscatid = LW65456_tblcategory.catid";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
<a href=LW65456_newbook.php > Add New Book         ---     <A Href=LW65456_page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Books Table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Book_ID </TD><TD> Book_Name </TD><TD> </TD> <TD> Edit </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["newsid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["newsheadline"];
		echo "</TD>";
		echo "<TD>";
        echo "";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=LW65456_updatebook.php?nid=$row[newsid]> <img src=image/edit.gif width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=LW65456_delbook.php?nid=$row[newsid]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
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
