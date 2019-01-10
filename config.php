<?php
/* CONFIG
* contains MySQL connection info and various
* configuration variables and settings
*/


// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


// MySQL database settings
$dbhost = "127.0.0.1";
$dbuser = "michaeldavidsond";
$dbpass = "";
$dbname = "Aussie_Tipping";


 

// MySQL connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


// Test if connection succeeded
if(mysqli_connect_errno()) {
  die("Database connection failed: " . mysqli_connect_error() ." (" . mysqli_connect_errno() . ")"
  );
}





?>