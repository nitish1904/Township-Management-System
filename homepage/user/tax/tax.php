
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
	
	<?php
	// C----------------------------------------------To caluclate income tax with income from citizen table--------------------------------------------
	$conn = oci_connect('se','se', 'localhost/XE');
	if (!$conn) {
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}
	
	// Construct the SQL query
	$sql = "UPDATE tax
			SET tax.amount= (SELECT citizen.salary * 2 /100
								 FROM citizen 
								 WHERE citizen.citizen_id = tax.taxid)";
	
	// Prepare and execute the SQL query
	$stmt = oci_parse($conn, $sql);
	if (!$stmt) {
		$e = oci_error($conn);
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}
	
	oci_execute($stmt);
	//------------------------------------------------FETCHING THE DUEDATE-------------------------------------------------------
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


// Fetch and print the values
while ($row = oci_fetch_assoc($stmt)) {
foreach ($row as $column => $value) {
	echo $column . '(2% income) : ' . $value . '<br>';
}
echo '<br>';
}

//------------------------------------------------
$cid = $_COOKIE['id'] ;
$query = "SELECT status FROM tax WHERE taxid = '" . $cid . "'";
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
	echo $column . ' : ' . $value . '<br>';
}
echo '<br>';
}
	
//-----------------------------------------------DUE DATE PASSED OR NOT----------------------------------
	$sql = "SELECT * FROM tax WHERE duedate < CURRENT_DATE and status = 'notpaid' and taxid = '" . $cid . "'";

// Execute the SQL statement
$stmt = oci_parse($conn, $sql);
oci_execute($stmt);

// Fetch the results
while (($row = oci_fetch_assoc($stmt)) != false) {
    // Process each row
    // ...

    // For example, print the date
    echo  "Your tax was not paid and the due date has passed....<br>---|PLEASE PAY TAX ASAP|---<br>";
	echo '<br><br><br><br><br><br><a href = "tax1.php" style="text-align:center; font-size: 40px;" > Tax Payment </a>';
}

//-------------------------------------TAX PAYMENT-------------------------
	// Close the database connection
	oci_free_statement($stmt);
	oci_close($conn);
	?>
	<br><br><br><br><br><br>
</main_content> 
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>