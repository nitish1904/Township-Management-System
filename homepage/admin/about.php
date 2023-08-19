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
<header style="background-color:green;">	<h1>
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
	<main_content style="height: 550px;">
<?php
		$conn = oci_connect('se','se', 'localhost/XE');
	// Citizens
	$stid = oci_parse($conn, "SELECT count(*) FROM Citizen");
	
	$r = oci_execute($stid);
	echo("<br> This township has a total population of --> ");
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	echo(" Citizens");
	///////////////////////////////////////////////////
	echo('<br>');
	$stid5 = oci_parse($conn, "SELECT count(working_id) FROM Work");
	
	$r5 = oci_execute($stid5);
	echo("<br> There are ");
	while ($row = oci_fetch_array($stid5, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	echo(" citizens working in community buildings");
	echo('<br>');

//////////////////////////////////////////////////
    $stid1 = oci_parse($conn, "SELECT * FROM Citizen");
	
	$r1 = oci_execute($stid1);
	echo("<br> Citizens : ");
	echo("<br>Citizen_id , Citizen_name , DoB , Age,  Occupation, Salary,  role");
	print '<table border="2">';
	while ($row = oci_fetch_array($stid1, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	print '</table>';
//////////////////////////////////////////////////////////////////
	$stid = oci_parse($conn, "SELECT count(*) FROM userss");
	
	$r = oci_execute($stid);
	echo("<br> This township has a total of --> ");
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	echo(" user accounts");

	//////////////////////////////////////////////////////////////////
	$stid = oci_parse($conn, "SELECT count(*) FROM Vehicle");
	
	$r = oci_execute($stid);
	echo("<br> <br>This township has a total of --> ");
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	echo(" Vehicles");

	//////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////
	$stid = oci_parse($conn, "SELECT count(*) FROM House");
	
	$r = oci_execute($stid);
	echo("<br><br> Number of Houses --> ");
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';

	   /////////////////////////////////////////////////////////
	   $stid = oci_parse($conn, "SELECT count(*) FROM Community_building");
	
	$r = oci_execute($stid);
	echo("<br><br> Number of Community Buildings --> ");
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
}
	?>
	
	</main_content>
</section>

<footer>
	Copyright to 
	Amrita School of Engineering 
</footer>
</body>
</html>