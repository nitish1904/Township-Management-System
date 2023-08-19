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
		<ul>
			<li> <a  href="adduser1.php"> Add User </a> </li>
			<li> <a href="removeuser1.php"> Remove User </a> </li>
			<li> <a href="#"> Contact Us </a> </li>
		</ul>
	</nav_bar>
	<main_content style="height: 550px;text-align: center;">
  <?php


$nis = isset($_POST['username']) == true ? $_POST['username'] : '';
$password= isset($_POST['password']) == true ? $_POST['password'] : '';
$citid= isset($_POST['cid']) == true ? $_POST['cid'] : '';

if(empty($nis) or empty($password) or empty($citid)){
    echo "Username or Password or Citizen ID field cannot be empty";}
else
{
    $db = "(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = patronus.ad-ins.com)(PORT = 1521))
        (CONNECT_DATA =
          (SERVER = DEDICATED)
          (SERVICE_NAME = XE)
        )
      )" ;
$conn = oci_connect('team3','team3', 'localhost/XE');;

$d = $nis;
$d1 = $password;
$d2 = $citid;
// Insert the date into mytable
$s = oci_parse($conn,
		"insert into userss values ('$d','$d1','$d2')");

// Insert & commits
$r = oci_execute($s);

// The rollback does nothing: the data has already been committed
oci_rollback($conn);

echo "User with username " . $d . " and Citizen ID " . $d2 . " added succesfully";
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


