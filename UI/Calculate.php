<?php
$hostname ="localhost";
$database ="schoolSelection";
$username ="root";
$password ="code4good";
$localhost = @mysql_connect($hostname,$username,$password)
or
trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database, $localhost);

$criteria = $_POST['criteria'];
$pref = 1;
$ans = array();
$x = 1;
if($criteria == "Budget")
{
	$x = 12;
}
else if($criteria == "Years")
{
	$x =8;
}
else if($criteria == "Impact")
{
	$x =3;
}
else if($criteria == "Availability of Teachers")
{
	$x =10;
}
$query_search = "select questionId,solution from solution group by userId";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);


 if($rows == 0) { 
 echo "No Data"; 
 }
 else  
 {
	 $i=1;
	while ($row=mysql_fetch_row($query_exec))
    {
		if($i==14)
		{
			$i=1;
		}
		if($i == $x)
		{
			$ans[$]
		}
		$ans[]
		$i = $i+1;
    }
	mysql_free_result($result);
}


?>