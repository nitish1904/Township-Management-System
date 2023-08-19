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
<header style = "background-color:brown;">
	<h1 >
		Township Management System          
	</h1>
	
</header>
<section>
	<nav_bar>
	<?php
	session_start();
        if(isset($_COOKIE['id'])) {
        echo '---| CITIZEN ID : '. $_COOKIE['id'].' |---';
        } 
		else{
			echo 'User is not set';
		}
    ?>
	<br><br>
	<ul>
	<li> <a  href="indexuser.php"> Home </a> </li>
			<li> <a href="about.php"> About </a> </li>
			<li> <a href="buy1.php"> Looking to Buy? </a> </li>
			<li> <a href="saleadmin.php"> Looking to Sell? </a> </li>
			<li> <a href="team3\communitybuildings\communitybuildings.php"> Community Buildings </a> </li>
			<li><a href="tax\tax.php"> Income Tax </a></li>
			<li> <a href="contactus.php"> Contact Us </a> </li>
		</ul>
		
	</nav_bar>
	<main_content style="height:  750px">
		<div class="container">
			<form method="post" action="selleradd.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td> Your Seller ID </td>
						<td> <input type="text" name="sid" id="sid" size="25"> </td>
					</tr>
					<tr>
						<td>  Name </td>
						<td> <input type="text" name="sname" id="sname" size="25"> </td>
					</tr>
					<tr>
						<td> Property Name </td>
						<td> <input type="text" name="pname" id="pname" size="25"> </td>
					</tr>
					<tr>
						<td> Selling Price </td>
						<td> <input type="text" name="sprice" id="sprice" size="25"> </td>
					</tr>
					<tr>
						<td> Your Citizen ID </td>
						<td> <input type="text" name="cid" id="cid" size="25"> </td>
					</tr>
					<tr>
						<td> Select Image to Upload </td>
						<td> <input type="file" name="propertyimage" id="propertyimage"> </td>
					<tr>
						<td colspan="2" align="center"> <input type="submit" value="Put for Sale"> </td>
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