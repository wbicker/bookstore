<?php
include 'LW65456_member.php';


require 'LW65456_dbcon.php';

$sql = "SELECT * from LW65456_approvecomment LEFT JOIN LW65456_tblbooks ON LW65456_approvecomment.newsid = LW65456_tblbooks.newsid";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
Approve Comments      ---     <A Href=LW65456_page1.php> [ Home ] </A></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Comments to Approve or Delete</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> ID </TD><TD> Comment </TD><TD> NewsID </TD><TD> News Headline </TD><TD> </TD><TD> Approve </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["id"];
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
		echo "<A href=LW65456_approvecom.php?nid=$row[id]> <img src=image/thumbsup.png width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=LW65456_delLW65456_approvecom.php?nid=$row[id]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
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