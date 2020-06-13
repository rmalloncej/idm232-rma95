<?php 
//offline
/*$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "cookbook";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);*/ 

//onine
$dbhost = "localhost";
$dbuser = "ranskyal_cooker";
$dbpass = "Ling!Lee558";
$dbname = "ranskyal_cookbook";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check the connection is good with no errors
if (mysqli_connect_errno()) {
		die ("Database connection failed: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_errno() . ")"
		);
}
?>