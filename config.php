<?php
/* CONFIG
* contains MySQL connection info and various
* configuration variables and settings
*/


// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);



// MySQL database settings
//$dbhost = "localhost";
//Michael DB Config
<<<<<<< HEAD
$dbhost = "127.0.0.1";
$dbuser = "michaeldavidsond";
$dbpass = "";
$dbname = "Aussie_Tipping";

//Grahams DB Config
// $dbhost = "localhost";
// $dbuser = "grahamclements";
// $dbpass = "";
// $dbname = "aussie_tipping";
=======
//$dbhost = "127.0.0.1";
//$dbuser = "michaeldavidsond";
//$dbpass = "";
//$dbname = "Aussie_Tipping";

//Grahams DB Config
$dbhost = "localhost";
$dbuser = "grahamclements";
$dbpass = "";
$dbname = "aussie_tipping";
>>>>>>> 0870a14b8d97d83e3d92dc5c7d1da1e29ac22733
 

// MySQL connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


// Test if connection succeeded
if(mysqli_connect_errno()) {
  die("Database connection failed: " . mysqli_connect_error() ." (" . mysqli_connect_errno() . ")"
  );
}








?>