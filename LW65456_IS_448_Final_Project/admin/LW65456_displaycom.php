<head><title> Display Comments </title> 
<link rel=stylesheet href=css/LW65456_style.css> 
</head>


<?php
include 'LW65456_member.php';


require 'LW65456_dbcon.php';

$sql = "SELECT * from LW65456_tblcomment LEFT JOIN LW65456_tblbooks ON LW65456_tblcomment.newsid = LW65456_tblbooks.newsid";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
Comments <a href=LW65456_newcom.php>Approve Comments</a>        ---     <A Href=LW65456_page1.php> [ Home ] </A></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Comment Table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Comment_ID </TD><TD> Comment </TD><TD> Book_ID </TD><TD> Book Name </TD><TD> </TD> <TD> Show/Hide </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["commentid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["comment"];
		echo "</TD>";
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
		echo "<A href=LW65456_show_hide_com.php?nid=$row[commentid]> <img src=image/edit.gif width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=LW65456_delcom.php?nid=$row[commentid]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
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