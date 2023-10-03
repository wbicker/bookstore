<?php
include 'LW65456_member.php';
// Show MyGuests Data

require 'LW65456_dbcon.php';

//display the comment

$id = "";

$id = $_GET['nid'];


	echo "</p> 1 to Show OR 0 to Hide";
	echo "<Form action=LW65456_updatecom.php method=post>";
	echo "<label for=show>1</label>";
	echo "<input type=radio name=sh id=show value=1 />";
	echo "<label for=hide>0</label>";
	echo "<input type=radio name=sh id=hide value=0 />";
	echo "<input type=submit value=Submit />";
	echo "<input type=hidden name=id value=$id>";
	echo "	</Form>";
	echo "	</p>";
		
		
		

?>