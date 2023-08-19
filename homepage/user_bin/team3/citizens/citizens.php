
<?php
	// Database connection
	$conn = new mysqli('localhost:3307','root','','township');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	$sql = "SELECT * FROM citizen";
	$result=$conn->query($sql);
	if($result->num_rows>0){
while($row=$result-> fetch_assoc()){
echo "<br><tr>Citizen-ID is <td>".$row["Citizen_id"]."</td>
Citizen Name is <td>".$row["Citizen_name"]."</td><br>
Date of birth is <td>".$row["DoB"]."</td><br>
Age is <td>".$row["Age"]."</td><br>
Occupation - <td>".$row["Occupation"]."</td><br>
Salary - <td>".$row["Salary"]."</td></tr><br><br><br>";

}
	}
	else{
		echo "0 result";
	}
	$conn-> close();
?>