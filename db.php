<?php
/** 
 * file: db.php 
 * purpose: connector
**/
$host = "localhost";
$password = "mojndo";
$user = "root";
$database = "fitness";

// connect
$mysqli = new mysqli( $host, $user, $password, $database ); // creates the object

// if error
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; // if error messages
}
else {
	
    /*
    echo "Your're connected to the database via: " 
    . $mysqli->host_info 
    . "\n";
    */

}
?>
