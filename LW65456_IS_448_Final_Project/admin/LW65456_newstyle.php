<?php
include 'LW65456_member.php';
?>
<HTML>
<Title> Add Style Tag </Title>
<Center>
<H1> Insert New Style Tag        ---     <A Href=LW65456_page1.php> Home </A> </H1>
<Form action=LW65456_insertstyle.php method=post>

<H3> Tag <select name=tag>
	<option value="p">P</option>
	<option value="body">Body</option>
	<option value="header">Header</option>
	<option value="footer">Footer</option>
	<option value="li">Li</option>
</select> 
	
<Br>
<H3> Color <Input type=color name=col> <Br>
<H3> Value (Hexcode) <Input type=text name=hex> <Br>

<Input type=submit value=Submit>
</Form>
</Center>
</HTML>