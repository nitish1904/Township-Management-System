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
		<li> <a  href="..\indexadmin.php"> Home </a> </li>

			<li> <a  href="adduser1.php"> Add User </a> </li>
			<li> <a href="removeuser1.php"> Remove User </a> </li>
		</ul>
	</nav_bar>
	<main_content style="height: 550px;text-align: center;">
		<form action="removeuser.php" method="post">
			<label for="uname"> Username </label>
			<input type="text" id="fname" name="usernameremove" ><br><br>
			<input type="submit" value="REMOVE">
		  </form> 
	</main_content>
</section>
<footer>
	Copyright to 
	Amrita School of Engineering 
</footer>
</body>
</html>