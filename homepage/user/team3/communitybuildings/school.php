
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

<header>
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
			<li> <a href="contactus.php"> Contact Us </a> </li>
		</ul>
		
	</nav_bar>
	<main_content style="height: 5500px;">
	
	<style>
	table{
		border-collapse: collapse;
		width: 100%;
		color: red;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
	}
	th{
		color:green;
	}
</style>
<table>
	<tr>
		<th>Building_no</th>
		<th>Building_name  </th>
		<th>Length</th>
		<th>Breadth</th>
		<th>Height</th>
		<th>Market Value</th>
		<th>Citizen_id</th>
<?php
	$conn = oci_connect('se','se', 'localhost/XE');
    $d="School";
	
	$stid = oci_parse($conn, "SELECT * FROM Community_building WHERE Building_name='" . $d . "'");

	$r = oci_execute($stid);
	
	// Fetch each row in an associative array
	print '<table border="1">';
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	print '</table>';





?>
</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
	
</footer>
</body>
</html>