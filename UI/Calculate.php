<?php
$hostname ="localhost";
$database ="schoolSelection";
$username ="root";
$password ="code4good";
$localhost = @mysql_connect($hostname,$username,$password)
or
trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database, $localhost);

$ans = array();

$query_search = "select * from solution";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);

echo $rows;
echo "Hello";
print_r($ans);
 if($rows == 0) { 
 echo "No Data"; 
 }
 $b = 0;
 else  
 {
	while ($row=mysql_fetch_row($query_exec))
    {
		for($i=4;$i<=18;$i++)
		{
			$ans[$b] = $ans[$b]+ $row[2];
		}
		$b=$b+1;
    }
	mysql_free_result($result);
	print_r($ans);
	echo "Hello Hello";
	echo max($ans);
}


?>