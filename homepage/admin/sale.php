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
<style type="text/css"> 
	td
	{
		height: 50px;
		padding: 10px;
		font-size: 20px;
	}
</style>
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
		<div class="container" style="font-size: 25px;font-weight: bolder;">
			<?php
				// $size=$_GET['dest'];
				// $price=$_GET['Price'];
				// $Seller_Name=$_GET['Name'];
				$SId=$_GET['sellerid1'];
				$e=$_GET['citizenid1'];
				//echo("Size : ".$size."<br>"); 
				//echo("Price : ".$price."<br>"); 
				//echo("Seller Name : ".$Seller_Name."<br>"); 
				echo("Seller ID : ".$SId); 
				$conn = oci_connect('se','se', 'localhost/XE');
    $d=$SId;
	
	$stid = oci_parse($conn, "SELECT Citizen_name FROM Citizen, Seller where Citizen.Citizen_id=Seller.Citizen_id AND Seller_id='" . $d . "'");
	
	$r = oci_execute($stid);
	// SELECT * FROM Citizen INNER JOIN Seller ON Citizen.Citizen_id=Seller.Citizen_id WHERE Seller_id='" . $d . "' AND Citizen_id='" . $e . "'
	// Fetch each row in an associative array
	// print '<table border="1">';
	echo("<br> Name : ");
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	print '</table>';
	//------------------------------------------------------
	$stid = oci_parse($conn, "SELECT Selling_Price FROM Citizen, Seller where Citizen.Citizen_id=Seller.Citizen_id  AND Seller_id='" . $d . "'");
	
	$r = oci_execute($stid);
	echo("<br> Market Price : ");
	while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	   print '<tr>';
	   foreach ($row as $item) {
		   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	   }
	   print '</tr>';
	}
	print '</table>';
// 	oci_fetch_all($stid, $res);
// echo "<pre>\n";
// var_dump($res);
// echo "</pre>\n";
			?>
			<form method="post" action="buyhome.php">
				<table>
					<tr>
						<td> Buyers Name </td>
						<td> <input type="text" name="Bname" id="Bname" size="25"> </td>
					</tr>
					<tr>
						<td>  Buyers Phone Number </td>
						<td> <input type="text" name="Bnumber" id="Bnumber" size="25"> </td>
					</tr>
					<tr>
						<td> Buyers Address </td>
						<td> <input type="text" name="Baddr" id="Baddr" size="25"> </td>
					</tr>
					<tr>
						<td colspan="2" align="center"> <input type="submit" value="Inquire"> </td>
					</tr>
				</table>
			</form>
		</div>
	</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
</footer>
</body>
</html>