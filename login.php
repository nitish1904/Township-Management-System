<?php
$nis = isset($_POST['txtuid']) == true ? $_POST['txtuid'] : '';
$password= isset($_POST['passwd']) == true ? $_POST['passwd'] : '';
$ciid= isset($_POST['cid']) == true ? $_POST['cid'] : '';
if(empty($nis) or empty($password) or empty($ciid)){
    echo "Username or password or Citizen ID cannot be empty";}
else
{
    $db = "(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = patronus.ad-ins.com)(PORT = 1521))
        (CONNECT_DATA =
          (SERVER = DEDICATED)
          (SERVICE_NAME = XE)
        )
      )" ;
    $connect =oci_connect('se','se', 'localhost/XE');//connection string 

    $query = "SELECT * from Userss WHERE Username='".$nis."' and Password='".$password."' and Citizen_id='".$ciid."'";
    session_start();
    
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.

setcookie("id", "".$ciid."", time() + (86400 * 30)); // 86400 = 1 day
echo $_COOKIE['id'];

    $result = oci_parse($connect, $query);
   
    oci_execute($result);
    $tmpcount = oci_fetch($result);


	function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
    if ($tmpcount==1) {
        echo "Login Success";
		if(startsWith($nis,"admin")){
            
			header("location: homepage/admin/indexadmin.php");
		}
		else{
		header("location: homepage/user/indexuser.php");
		}
	}
    else
    {
        header("location: login_forgot.html");
    }
}


?>