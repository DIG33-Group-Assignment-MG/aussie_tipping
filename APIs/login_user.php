<?php
/*This file registers a user to the database
the eligible responses are:

**Default**
Success = false
Reason = error
username = null

**Successful**
Success = true
Reason = Password and username successful
username = <username>

**Error**
success = false
reason = sql error
username = null
*/
//At the top of this page we need to start/resume the session
session_start();
//then we need to use the config.php for access to the DB
require_once('../config.php');
//then we will access the functions file
require_once('../functions.php');

//set the default response//
$json = array(
    'success' => false,
    'reason' => 'error',
    'username' => Null
    );

//check if values are set, if no values are set return false
if(!isset($_POST['user_name'],$_POST['password']))
    {
      $json['success'] = false;
      $json['reason'] = 'No Data Entered';
      $json['username'] = Null;
    }
    //if there are values
    else
    {
      //assign values to variables
      $username = $_POST['user_name'];
      $password = $_POST['password'];
     
    //set a query that will search for the user in the datatbase
     $query = "SELECT * ";
     $query .=" FROM Users";
     $query .=" WHERE username='$username';";
	//echo $query;
	//run the query
    $result = mysqli_query($connection, $query);
    //$row = mysqli_fetch_assoc($result); 
    //echo  $row['user_id'];
    //echo  $row['password'];
	
	//if there is no result then exit and say that username and passwrod are incorrect
	if(!$result)
	{
	  $json['success'] = false;
      $json['reason'] = 'Username/Password is incorrect';
      $json['username'] = Null;
	}
	//other we can take the result and the $row['password'] and compare it to $password
	else
	{
	$row = mysqli_fetch_assoc($result); 
	if($row['password']==$password)
	{
	  //set up JSon response
	  $json['success'] = true;
      $json['reason'] = 'Entry is correct';
      $json['username'] = $username;
      
      //set up $_SESSION data
      $_SESSION['user']=$username;
      $_SESSION['userid']=$row['user_id'];
	}
	else
	{
	  $json['success'] = false;
      $json['reason'] = 'Username/Password is incorrect';
      $json['username'] = Null;
	}
	    
	}
	 echo json_encode($json);
	 die();
};