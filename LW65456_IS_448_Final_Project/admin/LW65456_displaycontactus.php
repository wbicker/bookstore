<head><title> Display Contact Form </title> 
<link rel=stylesheet href=css/LW65456_style.css> 
</head>


<?php
include 'LW65456_member.php';


require 'LW65456_dbcon.php';

$sql = "SELECT * from LW65456_tblcontactus";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
 <A Href=LW65456_page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Contact Table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Contact_ID </TD><TD> User_Name </TD><TD> Department</TD> <TD> Message </TD><TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["id"];
		echo "</TD>";
		echo "<TD>";
        echo $row["name"];
		echo "</TD>";
		echo "<TD>";
        echo $row["dept"];
		echo "</TD>";
		echo "<TD>";
        echo $row["message"];
		echo "</TD>";
		echo "<TD>";
		echo "<A href=LW65456_delcontactus.php?nid=$row[id]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
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
