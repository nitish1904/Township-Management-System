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
<header style = "background-color:brown;">
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
	
	$stid = oci_parse($conn, "SELECT Citizen_name FROM Citizen where Citizen_id='" . $d . "'");
	
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
	$stid = oci_parse($conn, "SELECT Selling_Price FROM  Seller where Citizen_id='" . $d . "'");
	
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
	
	//-------------------------------------------------------
	$stid = oci_parse($conn, "SELECT COUNT(Buying_id) FROM Buy");
	
	$r = oci_execute($stid);
	// echo("<br> Buying ID : ");
	// while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	//    print '<tr>';
	//    foreach ($row as $item) {
	// 	   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
	// 	   echo($row);
	//    }
	//    print '</tr>';
	// }
	// echo($stid);
	// print '</table>';
	echo("<br>");
	$sql = "SELECT COUNT(*) AS total_rows FROM Buy";
$stmt = oci_parse($conn, $sql);

// Execute the query
if (oci_execute($stmt)) {
    // Fetch the row count
    $row = oci_fetch_assoc($stmt);
    $rowCount = $row['TOTAL_ROWS'];

    // Output the row count
    echo "Buying ID: b" . $rowCount+1;
} else {
    $e = oci_error($stmt);
    echo "Error executing query: " . $e['message'];
}

// Close the statement and connection
oci_free_statement($stmt);
// 	oci_fetch_all($stid, $res);
// echo "<pre>\n";
// var_dump($res);
// echo "</pre>\n";
			?>
			<p style = "font-family: Times New Roman, Times, serif;text-align:center;color:red;"> Enter the details correctly</p>
			<p style = "text-align:center; font-size:20px;">(Any discrepancy may lead to the cancellation of transaction)</p>
			<form method="post" action="buyhome.php" >
				<table>
					<tr>
						<td> Buying ID </td>
						<td> <input type="text" name="buyingid1" id="buyingid1" size="25"> </td>
					</tr>
					<tr>
						<td> Seller ID <br>(as shown above)</td>
						<td> <input type="text" name="sellerid2" id="sellerid2" size="25"> </td>
						
					</tr>
					<tr>
						<td>  YOUR ID </td>
						<td> <input type="text" name="buyerid1" id="buyerid1" size="25"> </td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"> <input type="submit" value="Buy"> </td>
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