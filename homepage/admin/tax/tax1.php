
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
<header style="background-color:green;">
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
	        <li> <a  href="..\indexadmin.php"> Home </a> </li>
			<li> <a href="..\about.php"> About </a> </li>
			<li> <a href="..\buy1.php"> Looking to Buy? </a> </li>
			<li> <a href="..\saleadmin.php"> Looking to Sell? </a> </li>
			<li> <a href="..\team3\houses\houses.php"> Houses </a> </li>
			<li> <a href="..\team3\communitybuildings\communitybuildings.php"> Community Buildings </a> </li>
			<li> <a href="..\vehicles.php"> Vehicles </a> </li>
			<li><a href="..\alterlogin\alterlogin1.php"> Add/Remove Users </a></li>
			<li><a href="..\tax\tax.php"> Income Tax </a></li>
			<li> <a href="..\contactus.php"> Contact Us </a> </li>
			
		</ul>
		
	</nav_bar>
	<main_content style="height: 5500px; text-align : center">
	<p style=" text-align : center">----------------TAX PAYMENT GATEWAY----------------</P>
	<br><br><br><br><br>
<button onclick="showPopup()">PAY TAX</button>
<br><br>
<div id="popupContainer" class="popup">
	<div class="popup-content">
	<?php
	
	//------------------------------------------------FETCHING THE DUEDATE-------------------------------------------------------
	$conn = oci_connect('se','se', 'localhost/XE');
	$cid = $_COOKIE['id'] ;
	$query = "SELECT duedate FROM tax WHERE taxid = '" . $cid . "'";
	$stmt = oci_parse($conn, $query);

if (!$stmt) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Execute the SQL statement
oci_execute($stmt);

$stmt = oci_parse($conn, $query);

if (!$stmt) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Execute the SQL statement
oci_execute($stmt);

// Fetch and print the values
while ($row = oci_fetch_assoc($stmt)) {
    foreach ($row as $column => $value) {
        echo $column . ': ' . $value . '<br>';
    }
    echo '<br>';
}


//------------------------------------------------FETCHING THE DUEAMOUNT-------------------------------------------------------
$cid = $_COOKIE['id'] ;
$query = "SELECT amount FROM tax WHERE taxid = '" . $cid . "'";
$stmt = oci_parse($conn, $query);

if (!$stmt) {
$e = oci_error($conn);
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Execute the SQL statement
oci_execute($stmt);

$stmt = oci_parse($conn, $query);

if (!$stmt) {
$e = oci_error($conn);
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Execute the SQL statement
oci_execute($stmt);

// Fetch and print the values
while ($row = oci_fetch_assoc($stmt)) {
foreach ($row as $column => $value) {
	echo $column . ' TO BE PAID(2% income) : ' . $value . '<br>';
}
echo '<br>';
}


	
	
	oci_free_statement($stmt);
	oci_close($conn);
	?>
		<button onclick="hidePopup()">Close</button> 
		<button onclick="navigateTo('tax2.php')"> Confirm Payment</button>

	</div>
</div>

<script>
	function showPopup() {
		document.getElementById('popupContainer').style.display = 'block';
	}
	
	function hidePopup() {
		document.getElementById('popupContainer').style.display = 'none';
	}

	function navigateTo(url) {
        window.location.href = url;
    }
</script>


</main_content> 
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>