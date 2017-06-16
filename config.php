<?php 

 $base= "pos";
 $server= "localhost";
 $user= "root"; 
 $cpass= "dorcas1994";
 

	$link = mysql_connect($server, $user, $cpass);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db($base, $link);
	if(!$db) {
		die("Unable to select database");
	}

?>