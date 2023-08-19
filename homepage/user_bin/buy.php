<html>
<head>
<title>
	DBMS Project Team 3
</title>
<meta charset="utf-8">
<meta name = "viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css"> 
	td
	{
		height: 50px;
		padding: 10px;
		font-size: 20px;
	}
</style>
</head>
<body>
<header>
	<h1>
		Township Management System 
	</h1>
</header>
<section>
	<nav_bar>
		<ul>
			<li> <a class="active" href="#"> Home </a> </li>
			<li> <a href="#"> About </a> </li>
			<li> <a href="login.html"> Login </a> </li>
			<li> <a href="buy.html"> Looking to Buy? </a> </li>
			<li> <a href="sale.html"> Looking to Sell? </a> </li>
			<li> <a href="#"> Contact Us </a> </li>
		</ul>
	</nav_bar>
	<main_content style="height:  750px">
		<div class="container" style="font-size: 25px;font-weight: bolder;">
			<?php
				$size=$_GET['dest'];
				$price=$_GET['Price'];
				$Seller_Name=$_GET['Name'];
				$SId=$_GET['Id'];
				echo("Size : ".$size."<br>"); 
				echo("Price : ".$price."<br>"); 
				echo("Seller Name : ".$Seller_Name."<br>"); 
				echo("Seller ID : ".$SId);
			?>
			<form method="post" action="buyHome.php">
				<table>
					<tr>
						<td> Buyers Name </td>
						<td> <input type="text" name="Bname" id="Bname" size="25"> </td>
					</tr>
					<tr>
						<td>  Buyers Phone Number </td>
						<td> <input type="text" name="Bnumber" id="Bnumber" size="25"> </td>
					</tr>
					<tr>
						<td> Buyers Address </td>
						<td> <input type="text" name="Baddr" id="Baddr" size="25"> </td>
					</tr>
					<tr>
						<td colspan="2" align="center"> <input type="submit" value="Inquire"> </td>
					</tr>
				</table>
			</form>
		</div>
	</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
</footer>
</body>
</html>