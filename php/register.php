
<?php
$hostname ="localhost";
$database ="schoolSelection";
$username="root";
$password ="code4good";
$localhost = @mysql_connect($hostname,$username,$password)
or
trigger_error(mysql_error(),E_USER_ERROR);
 
mysql_select_db($database, $localhost);
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['role'];

$username = $_POST['username'];

$query_search = "INSERT INTO user (userId,username,email,type,password)VALUES ('".$userId++."','".$username."','".$email."', '".$type."','".$password."')";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);
//echo $rows;
 if($rows == 0) { 
 echo "No Such"; 
 }
 else  {
	 
    echo "User Found"; 

	}
header('Location: Log.html');
exit;
?>