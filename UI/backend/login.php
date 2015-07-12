<?php
$hostname ="localhost";
$database ="schoolSelection";
$username ="root";
$password ="code4good";
$localhost = @mysql_connect($hostname,$username,$password)
or
trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database, $localhost);

$userid = $_POST['username'];
$password = $_POST['password'];

$query_search = "select * from user where username = '".$userid."' AND password = '".$password. "'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);

 if($rows == 0) { 
 echo "No Such User Found"; 
 }
 else  {
	session_start();
	$query_exec=mysql_fetch_array($query_exec);
	$name=$query_exec["username"];
	$type=$query_exec["type"];
	if($type == "Partner")
	{
		header('Location: ../UI/partnerHome.html');
	}
	else if($type == "Consultant")
	{
		header('Location: ../UI/consultantHome.html');
	}
	else if($type == "Others")
	{
		header('Location: ../UI/othersHome.html');
	}
    echo array($name,$type); 
}
?>