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
</head>
<body>
<header style="background-color:green;">
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
	<main_content style="height:  750px">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
							<img src="image/2bhkHouse.jpg">
							<div class="caption">
							2BHK House <br>
							C2 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="C2">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C2">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
						<img src="image/3bhkHouse.jpg">
						<div class="caption">
							3BHK House <br>
							C5 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="s503">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C3">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
						<img src="image/5bhkHouse.jpg">
						<div class="caption">
							5BHK House <br>
							C6 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="s506">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C11">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
							<img src="image/5bhk2.jpg">
							<div class="caption">
							5BHK House <br>
							C10 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="s504">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C7">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
							<img src="image/3bhk2.jfif">
							<div class="caption">
							3BHK House <br>
							C1 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="s501">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C1">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
						
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
							<img src="image/5bhk3.jpg">
							<div class="caption">
							5BHK House <br>
							C3 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="s505">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C4">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
						
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
							<img src="image/land1.jpg">
							<div class="caption">
							10 Acre Land <br>
							C7 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="s506">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C1">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a>
							<img src="image/land2.jpg">
							<div class="caption">
							8 Acre Land <br>
							C8 </br>
						</div>
					</a>
					
							<form action="buy.php" method="get">
							<input class="input100" type="hidden" name="sellerid1" placeholder="sellerid1" value="s507">
							<input class="input100" type="hidden" name="citizenid1" placeholder="citizenid1" value="C2">
							<a href="buy.php">
							<button class="button housebutton">Details</button>
						    </a>
							</form>
						
					</div>
				</div>
				
				
				
			</div>
		</div>
	</main_content>

</section>
<br><br>
</body>
</html>