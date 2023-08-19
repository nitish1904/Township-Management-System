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
			<li> <a href="news.php"> Create News </a> </li>
			<li> <a href="news2.php"> View News </a> </li>
		</ul>
		
	</nav_bar>
	<main_content style="height: 550px;">
	<p style = "font-size:40px;text-align:center;"> Create News </p>
	<?php
				$conn = oci_connect('se','se', 'localhost/XE');


$sql = "SELECT COUNT(*) AS total_rows FROM news";
$stmt = oci_parse($conn, $sql);

// Execute the query
if (oci_execute($stmt)) {
    // Fetch the row count
    $row = oci_fetch_assoc($stmt);
    $rowCount = $row['TOTAL_ROWS'];

    // Output the row count
    echo "News ID: n" . $rowCount+1;
} else {
    $e = oci_error($stmt);
    echo "Error executing query: " . $e['message'];
}
	?>
	<form method="post" action="news1.php" >
				<table>
					<tr>
						<td> News ID<br>(as shown above) </td>
						<td> <input type="text" name="news1" id="news1" size="25"> </td>
					</tr>
					<tr>
						<td> Your ID </td>
						<td> <input type="text" name="news2" id="news2" size="25"> </td>
					</tr>
					<tr>
						<td> Headline </td>
						<td> <input type="text" name="news3" id="news3" size="25"> </td>
					</tr>
					
					<tr>
						
						<td>  News </td>
						<td> <input type="text" name="news4" id="news4" size="25"> </td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"> <input type="submit" value="POST"> </td>
					</tr>
				</table>
			</form>

	
	</main_content>
</section>

</body>
</html>