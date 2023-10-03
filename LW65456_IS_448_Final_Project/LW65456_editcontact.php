<?php
include "dbconn.php";
$id = $_GET["id"];
$sql = "Select id, name, dept, message from LW65456_tblcontactus where id = $id"; 
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//echo $row["name"];

?>

<HTML>
<head><title> edit Contact us </title> </head>
<H1> Edit Contactus </H1>

<Form action=LW65456_updatecontactus.php>
 <input type="hidden" name="id" value=<?=$row["id"]?>>
<Center><link rel="stylesheet" href="style/LW65456_style.css">
Name <Input type=text name=t1 value=<?=$row["name"]?>>
<Br>
Dept Name
		<Select name=c1>
			<option value=Math> Math </option>
			<option value=IS> IS </option>
			<option value=CS> CS </option>
			<option value=Other> Other </option>
		</Select>
		<Br>
Reason <textarea name=m1 rows="4" cols="50"> "<?=$row["message"]?>" </textarea>
<Br>
<input type="submit" value=Update>
</center>
</Form>
</HTML>
