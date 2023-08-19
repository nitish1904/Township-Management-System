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
<header style="background-color:brown;">	<h1>
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
	<main_content style="height: 550px;">
<?php
		$connection = oci_connect('se','se', 'localhost/XE');
	// Citizens
	
	if (!$connection) {
		$error = oci_error();
		die("Connection failed: " . $error['message']);
	}
	
	// Query to retrieve all rows from the table
	$query = "SELECT headline,news FROM news";
	
	// Prepare the statement
	$statement = oci_parse($connection, $query);
if (!$statement) {
    $error = oci_error($connection);
    die("Statement preparation failed: " . $error['message']);
}

// Execute the statement
$result = oci_execute($statement);
if (!$result) {
    $error = oci_error($statement);
    die("Statement execution failed: " . $error['message']);
}

// Fetch and print all the rows
while ($row = oci_fetch_assoc($statement)) {
    foreach ($row as $column => $value) {
        if ($value instanceof OCILob) {
            // Handle CLOB data
            $clobData = $value->load();
            echo $column . ": " . $clobData . "<br>";
        } else {
            // Print other column values
            echo $column . ": " . $value . "<br>";
        }
    }
    echo "<br>";
}

// Clean up
oci_free_statement($statement);
oci_close($connection);
	?>
	
	</main_content>
</section>

<footer>
	Copyright to 
	Amrita School of Engineering 
</footer>
</body>
</html>