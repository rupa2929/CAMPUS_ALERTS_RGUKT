<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="campus_alerts";
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(!$con)
	{
		die("falied to connect!");
	}
?>