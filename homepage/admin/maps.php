
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
<header style="background-color:green;">
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
	<li> <a  href="indexadmin.php"> Home </a> </li>
			<li> <a href="about.php"> About </a> </li>
			<li> <a href="buy1.php"> Looking to Buy? </a> </li>
			<li> <a href="saleadmin.php"> Looking to Sell? </a> </li>
			<li> <a href="team3\houses\houses.php"> Houses </a> </li>
			<li> <a href="team3\communitybuildings\communitybuildings.php"> Community Buildings </a> </li>
			<li> <a href="vehicles.php"> Vehicles </a> </li>
			<li><a href="alterlogin\alterlogin1.php"> Add/Remove Users </a></li>
			<li><a href="tax\tax.php"> Income Tax </a></li>
			<li> <a href="contactus.php"> Contact Us </a> </li>
		</ul>
		
	</nav_bar>
	<main_content style="height: 5500px;">
	<div style="text-align:center;">
	<iframe style="margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15556.244485510339!2d77.65029393190672!3d12.903791340165643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1369cdcb1aad%3A0xf7054b17d99b1a3d!2sEastwood%20Twp%2C%20Haralur%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1681196928517!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
	<br><br>
	<a  href="reach.php" style="margin:auto; border: 2px solid violet;
  padding: 5px; "> How to reach ? </a>
  </div>
</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>