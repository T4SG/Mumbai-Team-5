<?php
$hostname ="e.amazonaws.com";
$database ="mydb";
$username ="root";
$password ="code4good";
$localhost = @mysql_connect($hostname,$username,$password)
or
trigger_error(mysql_error(),E_USER_ERROR);
 
mysql_select_db($database, $localhost);
 
 
$userid = $_POST['userId'];
$password = $_POST['password'];

$query_search = "select * from users where userId = '".$userid."' AND password = '".$password. "'";
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
    echo array($name,$type); 
}
?>