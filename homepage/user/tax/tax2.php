
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
	<!--
	<form action="..\..\login.html" method="get">
    <button class="button housebutton" style="font-size:50%; text-align: right;"> Logout </button>
    </form>  
	-->
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
	        <li> <a  href="..\indexuser.php"> Home </a> </li>
			<li> <a href="..\about.php"> About </a> </li>
			<li> <a href="..\buy1.php"> Looking to Buy? </a> </li>
			<li> <a href="..\saleadmin.php"> Looking to Sell? </a> </li>
			<li> <a href="..\team3\communitybuildings\communitybuildings.php"> Community Buildings </a> </li>
			<li><a href="..\tax\tax.php"> Income Tax </a></li>
			<li> <a href="..\contactus.php"> Contact Us </a> </li>
			
		</ul>
		
	</nav_bar>
	<main_content style="height: 5500px; text-align : center">
	<p style=" text-align : center">----------------TAX PAYMENT GATEWAY----------------</P>
	
<br><br>
<div id="popupContainer" class="popup">
	<div class="popup-content">
	<?php
	
	//------------------------------------------------FETCHING THE DUEDATE-------------------------------------------------------
	$conn = oci_connect('se','se', 'localhost/XE');
	$cid = $_COOKIE['id'] ;
	$query = "UPDATE tax SET status = 'paid'	WHERE taxid = '" . $cid . "'";
	$stmt = oci_parse($conn, $query);

if (!$stmt) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Execute the SQL statement
oci_execute($stmt);


	oci_free_statement($stmt);
	oci_close($conn);
	?>
<br><br><br><br><br><br>
<p style="font-size:30px ;font-family: 'Times New Roman', Times, serif;">YOUR PAYMENT OF INCOME TAX IS SUCCESSFUL...</p>


	</div>
</div>




</main_content> 
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>