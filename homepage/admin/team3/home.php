
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

<header>
	<h1>
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
			<li> <a class="active" href="indexadmin.php"> Home </a> </li>
			<li> <a href="about.php"> About </a> </li>
			<li> <a href="buy1.php"> Looking to Buy? </a> </li>
			<li> <a href="saleadmin.php"> Looking to Sell? </a> </li>
			<li> <a href="team3\houses\houses.html"> Houses </a> </li>
			<li> <a href="team3\communitybuildings\communitybuildings.html"> Community Buildings </a> </li>
			<li><a href="alterlogin\alterlogin1.php"> Add/Remove Users </a></li>
			<li> <a href="#"> Contact Us </a> </li>
		</ul>
		
	</nav_bar>
	<main_content style="height: 550px;">
	<form action="house1.php" method="get">
        <div class="house1 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-1</p>
    <img src="house1.jpg" class="h1 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>
    <form action="house2.php" method="get">
        <div class="house2 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-2</p>
    <img src="house2.jpg" class="h2 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>
    <form action="house3.php" method="get">
        <div class="house3 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-3</p>
    <img src="house3.jpg" class="h3 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>
    <form action="house4.php" method="get">
        <div class="house4 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-4</p>
    <img src="house4.jpg" class="h4 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="house5.php" method="get">
        <div class="house5 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-5</p>
    <img src="house5.jpg" class="h5 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="house6.php" method="get">
        <div class="house6 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-6</p>
    <img src="house6.jpg" class="h6 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="house7.php" method="get">
        <div class="house7 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-7</p>
    <img src="house7.jpg" class="h7 house" width="220" height="200" >
    <br>
    <br>
    <button class="button housebutton">Details</button>
    <br>
    <p style="color:antiquewhite">.</p>
        </div>
    </form>

    <form action="house8.php" method="get">
        <div class="house8 houses" style= "text-align: center;">
            <p style="color:rgb(93, 27, 131); font-size: 30px;">House-8</p>
    <img src="house8.jpg" class="h8 house" width="220" height="200" >
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


