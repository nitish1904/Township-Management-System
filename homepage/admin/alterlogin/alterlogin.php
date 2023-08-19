<?php
$nis = isset($_POST['txtuid']) == true ? $_POST['txtuid'] : '';
$password= isset($_POST['passwd']) == true ? $_POST['passwd'] : '';

if(empty($nis) or empty($password)){
    echo "UserID atau Password kosong";}
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

    $query = "SELECT * from Userss WHERE Username='".$nis."' and Password='".$password."'";
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
			header("location: homepage/indexadmin.html");
		}
		else{
		header("location: homepage/index.html");
		}
	}
    else
    {
        echo "Login Failed";
    }
}


?>