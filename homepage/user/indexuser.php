
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
<style>
        .logoutbutton:hover{
border: 2px solid rgb(71, 166, 195);
        }
		div.maps1:hover{
			text-decoration:underline;
        }
    </style>
</head>
<body>
<header style="background-color:brown;">
<script src="logout1.js"></script>
<div  style=" text-align: right;">
	<a  style="color: violet; border: 2px solid white; font-size:50%;"><button onclick="logout();">Logout</button></a>
	</div>
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
	<p><div class="news2" ><a class="news" href="news2.php" style="text-align:left; border: 2px solid green; padding:3px; color:purple; text-decoration:none;"> >> News << </a></div></p>
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
					<img src="image/pic1.jpg" alt="Los Angeles" class="d-block w-100" >
					<div class="carousel-caption d-none d-md-block">
        				<h5>Nitish's House</h5>
        				<p>Team-3 Township</p>
      				</div>
				</div>

			    <div class="item">
			    	<img src="image/pic2.jpg" alt="Chicago" class="d-block w-100">
					<div class="carousel-caption d-none d-md-block">
        				<h5>Arjun's House</h5>
        				<p>Team-3 Township</p>
      				</div>
			    </div>
    
			    <div class="item">
			    	<img src="image/pic3.jpg" alt="New york" class="d-block w-100">
					<div class="carousel-caption d-none d-md-block">
        				<h5>Gaurang's House</h5>
        				<p>Team-3 Township</p>
      				</div>
			    </div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
		      	<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#myCarousel" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right"></span>
      			<span class="sr-only">Next</span>
    		</a>
    	</div>
    </div><br>
	<div style="text-align:center">
	<p><div class="maps1" ><a class="maps" href="maps.php" style="border: 2px solid green; padding:3px; color:purple; text-decoration:none;"> Get Directions </a></div></p>

</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>