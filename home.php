<?php
session_start();
require(__DIR__ . "/lib/check_user_logged_in.php");
require(__DIR__ . "/lib/dbconnect.php");

$current_user_id = $_SESSION['user_id'];

$db = new Database();
$db->connect();
$sql = "SELECT fusion_id, campaign, customer_name, open_date, close_date, status, created_at, updated_at FROM case_details WHERE user_id = $current_user_id ORDER BY updated_at DESC";
$result = mysql_query($sql) or die(mysql_error());
show();
echo '	<div id="form_container">
	<table>';
while($row = mysql_fetch_object($result)){
	echo "<tr> ";
	foreach($row as $key => $value){
		if($key == 'fusion_id'){		
			echo "<td> <a href='view_case.php?case_id=$value'> $value </a> </td>";	
		}
		else{
			echo "<td> <label class='description'>$value </label> </td>";	
		}
	}
	echo "</tr>";
}
echo '</table></div></body>';

function show($errors='', $cases=null){
	require('./html/home.html');
}

?>