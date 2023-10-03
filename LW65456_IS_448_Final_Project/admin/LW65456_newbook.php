<?php
include 'LW65456_member.php';
?>
<HTML>
<Title> Add Book </Title>
<Center>
<H1> Insert New Book        ---     <A Href=LW65456_page1.php> Home </A> </H1>
<Form action=LW65456_insertbook.php method=post>
<H3> Category <select name=ca>
<?php
require 'LW65456_dbcon.php';
$sql = "SELECT * from LW65456_tblcategory";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) 
	{
	echo "<option value=". $row["catid"] ."> ". $row["catname"]." </option>";
	//echo "<option> ".  ."</option>";
	}
	
$conn->close();

	?>
</select>	



 <Br>
<H3> Book Name <Input type=text name=hl> <Br>
<H3> Author <Input type=text name=au> <Br>
<H3> Date <Input type=date name=da> <Br>
<H3> Image <Input type=text name=im> <Br>
<H3> Details <Textarea cols=50 rows=15 name=de> </textarea> <Br>

<Input type=submit value=Submit>
</Form>
</Center>
</HTML>