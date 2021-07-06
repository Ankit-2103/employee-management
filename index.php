<!DOCTYPE html>
<html>
<head>
	<title>
		EMPLOYEE MANAGEMENT SYSTEM
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	
<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
	p{
		border: solid;
		padding: 30px;
	}
	
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="emp.png">
			<h1 style="color: white;">EMPLOYEE MANAGEMENT SYSTEM</h1>
		</div>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="add.php">ADD_EMPLOYEE</a></li>
					
				</ul>
			</nav>
		</header>
		<section><br><br>
<?php

$db = mysqli_connect("localhost","root","","employee");
if (!$db) {
  die("connection failed :" .mysqli_connect_error());
}else
echo "";
$res=mysqli_query($db,"SELECT * FROM `emp` ORDER BY `emp`.`Name` ASC ;");
while($row=mysqli_fetch_assoc($res))
			{echo "<p>";
				 echo"Name:";echo $row['Name'];echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				 echo"Manager:";echo $row['Manager']; echo "<br><br>";
				 echo"Role:";echo $row['Role']; echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				 echo"Office:";echo $row['Office']; echo "<br><br>";
				 echo"Mobile:";echo $row['Mobile']; echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				  echo"Joiningdate:";echo $row['Joiningdate'];echo "<br>";
			echo "</p><br><br><br><br>";	  				
			}	
?>
		</section>
		
	</div>
</body>

</html>