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
	<?php
		$conn = oci_connect('se','se', 'localhost/XE');;

$x1 = $_POST['news1'];
$x2 = $_POST['news2'];
$x3=$_POST['news3'];
$x4=$_POST['news4'];

// $x3 = $_POST['sellerid1'];
// Insert the date into mytable

// if($x3 == $x4){
//        echo "Hi";
// }
$s = oci_parse($conn, "INSERT INTO news VALUES (:x1, :x2, :x3, :x4)");
oci_bind_by_name($s, ":x1", $x1);
oci_bind_by_name($s, ":x2", $x2);
oci_bind_by_name($s, ":x3", $x3);
oci_bind_by_name($s, ":x4", $x4);
$r = oci_execute($s);

// The rollback does nothing: the data has already been committed
oci_rollback($conn);

		?>
		<br><br><br><br><br><br>
		<p style = "font-family: Times New Roman, Times, serif;text-align:center;font-size:30px ;"> News has been posted successfully...</p>
	</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
</footer>
</body>
</html>


		
