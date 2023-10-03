<HTML>
<head>
	<title> Contact Us </title> 
	<link rel="stylesheet" href="style/LW65456_style.css">
	<link rel="icon" type="image/x-icon" href="images/new_logo.png">
	<style>
	<?php
	require 'LW65456_dbcon.php';
	$sql = "Select * from LW65456_tblstyle";
	$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
		If ($row["tag"]=='H1'){
		echo "h1 {color:".$row["value"].";}";
		} elseif ($row["tag"]=='H2'){
		echo "h2 {color:".$row["value"].";}";
		}elseif ($row["tag"]=='H3'){
		echo "h3 {color:".$row["value"].";}";
		}elseif ($row["tag"]=='p'){
		echo "p {color:".$row["value"].";}";
		}elseif ($row["tag"]=='header'){
		echo "header {color:".$row["value"].";}";
		}elseif ($row["tag"]=='body'){
		echo "body {color:".$row["value"].";}";
		}elseif ($row["tag"]=='footer'){
		echo "footer {color:".$row["value"].";}";
		}elseif ($row["tag"]=='li'){
		echo "li {color:".$row["value"].";}";
		}
		
		}
	?>
		</style>
	
</head>
<body>
	<header class="banner">
	<img src="images/new_logo.png" width=20% style="margin-left:40px; padding-bottom:0; padding-top:0;"> 

	<div class="panel panel-nav">
		<center>
			<ul>
			<li> <a href="LW65456_index.php"> Home </a> </li>
			<li> <a href="LW65456_contactus.html"> Contact Us </a> </li>
			<li>
				<div class="dropdown"> 
					<button class="dropbtn" style="outline:none;">Category</button>
					<div class="dropContent">
						
							<?php
								require 'LW65456_dbcon.php';
								
								$sql1 = "SELECT * from LW65456_tblcategory";
								$result1 = $conn->query($sql1);
   							 	while($row = $result1->fetch_assoc()) 
							 	{
								 echo "<a href=LW65456_viewcat.php?id=".$row["catid"].">".$row["catname"]."</a>";
								 //echo "<option> ".  ."</option>";
								
								 }
	
								 

							?>
				
					</div>
				</div>
			</li>
			</li>
			<li> <a href="admin/LW65456_index.html"> Login </a> </li>
			<li>  <div class="search">
							<Form action="LW65456_search.php">
									<input type="text" name="search" size="20" height="24" placeholder="Google Site Search">
								<button style="background-color:#e9e9e9;color:#000;">Go</button> 
							</Form>	
							</div>
							
			</li>
		
			</ul>
		</center>
	</div>
	</header>
	
<div class="contact-main">
	<main class="contact-main">
	
	

	<form action=LW65456_insertcontactus.php>
	<Center>
	First and Last Name <Input type=text name=t1>
	<Br>
	What Is The Book Category?
			<Select name=c1>
				<option value=Math> Math </option>
				<option value=IS> IS </option>
				<option value=CS> CS </option>
				<option value=Other> Other </option>
			</Select>
			<Br>
	Reason <textarea name=m1 rows="4" cols="50"> </textarea>
	<Br>
	
	<input type="submit" value=Submit>
	</center>
	</form>

	
	</main>
</div>
	
	
	
	<footer>
		<center>
			MyWebsite
		</center>
	</footer>
</body>

</html>