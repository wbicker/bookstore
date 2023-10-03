<html>
<head><title> Display StyleSheet </title> 
<link rel=stylesheet href=css/LW65456_style.css> 
</head>


<?php

include 'LW65456_member.php';


require 'LW65456_dbcon.php';

$sql = "SELECT styleid, tag, value FROM  LW65456_tblstyle";
$result = $conn->query($sql);
$conn->query($sql);
$row = $result->fetch_assoc();

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
Stylesheet <a href=LW65456_newstyle.php>[ Add Tag ] </a>          ---     <A Href=LW65456_page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";
	echo "<h2>Update Website Colors</h2> <Br>";

	echo "<Table border=0 width=50%>";
	echo "<TR bgcolor=#85e085>";
	echo "<TD> Style_ID </TD><TD> Tag </TD><TD>Value</TD> <TD> Pick Color </TD> <TD> Type Value (Hex) </TD><TD></TD><TD> </TD><TD> Update </TD>";
	echo "</TR>";

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			echo "<TR>";
			echo "<TD>";
	        echo $row["styleid"];
			echo "</TD>";
			echo "<TD>";
	        echo $row["tag"];
			echo "</TD>";
			echo "<TD>";
	        echo $row["value"];
			echo "</TD>";
			echo "<TD>";
			echo "<Form action=LW65456_updateinsertstyle.php method=post>";
	        echo "
				<input type=color name=col value=#ff0000/>
				";
			echo "</TD>";
			echo "<TD>"; 
	        echo "
				<input type=text name=val value />
				";
			echo "</TD>";
			echo "<TD>";
			echo "<input type=hidden name=styleid value=". $row['styleid'] .">";
			echo "</TD>";
			echo "<TD>";
			echo "<input type=hidden name=tag value=". $row['tag'] .">";
			echo "</TD>";
			echo "<TD>";
			echo "<input type=submit value=Update>";
			echo "</Form>";
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
	 
</html>