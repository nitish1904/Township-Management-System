
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
        .houses{
            margin: 100px;
  border: 6px solid #4CAF50;
  border-style: inset;
        }
        .house:hover{
border: 5px solid plum;
        }
        .housebutton:hover{
border: 2px solid rgb(71, 166, 195);
        }
    </style>
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
	<li> <a  href="..\..\indexadmin.php"> Home </a> </li>
			<li> <a href="..\..\about.php"> About </a> </li>
			<li> <a href="..\..\buy1.php"> Looking to Buy? </a> </li>
			<li> <a href="..\..\saleadmin.php"> Looking to Sell? </a> </li>
			<li> <a href="..\..\team3\houses\houses.php"> Houses </a> </li>
			<li> <a href="..\..\team3\communitybuildings\communitybuildings.php"> Community Buildings </a> </li>
			<li> <a href="..\..\vehicles.php"> Vehicles </a> </li>
			<li><a href="..\..\alterlogin\alterlogin1.php"> Add/Remove Users </a></li>
            <li><a href="..\..\tax\tax.php"> Income Tax </a></li>
			<li> <a href="..\..\contactus.php"> Contact Us </a> </li>
		</ul>
		
	</nav_bar>
	<main_content style="height: 5500px;">
	<form action="airport.php" method="get">
        <div class="airport houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Airport</p>
    <img src="airport.jpg" class="h1 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>
    <form action="busstation.php" method="get">
        <div class="house2 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Bus Station</p>
    <img src="busstation.jpg" class="h2 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>
    <form action="college.php" method="get">
        <div class="house3 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">College</p>
    <img src="college.jpg" class="h3 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>
    <form action="hotel.php" method="get">
        <div class="house4 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Hotel</p>
    <img src="hotel.jpg" class="h4 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="movietheatre.php" method="get">
        <div class="house5 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Movie Theatre</p>
    <img src="movietheatre.jpg" class="h5 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="postoffice.php" method="get">
        <div class="house6 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Post Office</p>
    <img src="postoffice.jpg" class="h6 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="railwaystation.php" method="get">
        <div class="house7 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Railway Station</p>
    <img src="railwaystation.jpg" class="h7 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="school.php" method="get">
        <div class="house8 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">School</p>
    <img src="school.png" class="h8 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="shoppingmall.php" method="get">
        <div class="house8 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Shopping Mall</p>
    <img src="shoppingmall.jpg" class="h8 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="supermarket.php" method="get">
        <div class="house8 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">Super Market</p>
    <img src="supermarket.jpg" class="h8 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>
</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>




