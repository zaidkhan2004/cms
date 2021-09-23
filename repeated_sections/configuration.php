<?php

	// include "../error_reporting.php";
	// error_reporting(1);
	$conn2 = "";
	
	date_default_timezone_set('Asia/Dubai');

	// Connection to database
	function connect2(){

		// Database parameters
	    $servername = "45.79.123.149";
	    $username = "znwnqqtcvj";
	    $password = "BmZXx5mDYX";
	    $dbname = "znwnqqtcvj";
	    
	    global $conn2;
    	$conn2 = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

	}

	connect2();
?>
