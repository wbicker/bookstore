<html>
<head>
	<title> New Site - Search </title>
	<link rel="stylesheet" href="style/LW65456_style.css">
	<link rel="stylesheet" href="style/stylemenu.css">

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
	
	
	<main>
	
	<?php


require 'LW65456_dbcon.php';
//echo "Connected successfully";

$id = "";
$id = $_GET['search'];

//$sql = "SELECT * from LW65456_tblbooks LEFT JOIN LW65456_tblcategory ON LW65456_tblbooks.newscatid = LW65456_tblcategory.catid where newsheadline like %".$id."% or newsdetails like ".$id."";
$sql = "SELECT * from LW65456_tblbooks LEFT JOIN LW65456_tblcategory ON LW65456_tblbooks.newscatid = LW65456_tblcategory.catid where newsheadline like '%".$id."%' or newsdetails like '%".$id."%'  or newsautor like '%".$id."%'";
//echo $sql;
// SELECT * FROM table1 LEFT JOIN table2 ON table1.id=table2.id;
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
	{
	
	echo 	"
			<section>	
				<article>
					<img width=150px height=200px src=images/".$row["newsimage"]." />
					<BR>
					<h2> ".$row["newsheadline"]." </h2>
					<p> ".substr($row["newsdetails"],0,300)." </p>
					<p><br><br><a href=LW65456_details.php?id=".$row["newsid"].">Details</a><br><br></p>
				</article>
			</section>";
		
	}
	
$conn->close();

	?>
	
	</main>
	
	<footer>
		<center>
			Footer information
		</center>
	</footer>
</body>
</html>