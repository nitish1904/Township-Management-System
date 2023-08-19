
<html>
<head>
<title>
	DBMS Project Team 3
</title>
<meta charset="utf-8">
<meta name = "viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header style="background-color:brown;">
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
	<main_content style="height: 5500px;">
	<div >
	<h1 style="text-align:center; color:Purple"> Reach us </h1>
Our Township is located in the village Kasavanahalli on the outskirts of Bengaluru. This area falls within the limits of Varthur Hobli in Bengaluru South Taluk. This picturesque campus of over 25 acres is well connected by road, rail and air. It is located just off of the Koramangala and HSR Layout, Sarjapura Road areas. It is about 14 kms from Vidhana Soudha and 17 kms from Majestic Bus Terminus.
<br><br>
<p style="color:DodgerBlue;">
<strong>- By Air - </strong></p>
Bengaluru’s new airport at Devanahalli is located at some distance away from the main city. It is well connected, however, with special buses plying to major centers such as Majestic and City Market.
<br><br>
<p style="color:DodgerBlue;">
<strong>- By Train - </strong></p>
The campus is located about 17 kilometers from the City Railway Station, Majestic Bus Terminus.
<br><br>
<p style="color:DodgerBlue;">
<strong>- By Bus - </strong></p>
The Campus is located in south Bengaluru on a road connecting Sarjapur Road and Hosur Road and is about 2 kilometers from Kaikondranahalli busstop on Sarjapur Road. BMTC buses ply right upto the campus gate from city center places like Majestic & City Market. The campus can also be accessed from Hosur Road, about 5 kms before the Electronic City. Any bus towards Sarjapura will take one to Kaikondanahalli, one stop before Wipro’s Corporate Office.

<br><br>
<p style="color:DodgerBlue;">
<strong>Bus Routes : </strong></p>
Bus Number 340 L from Majestic to college main gate and 341 B from KR Market to college. 342 F (From Majestic), 342 A, 342 B, 342 C, 342 D (From City Market) – Passes through Kaikondranahalli, the nearest bus stop is Off Sarjapura main road.
	</div>
</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>