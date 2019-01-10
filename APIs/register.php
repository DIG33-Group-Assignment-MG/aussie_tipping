<?php
/*This file registers a user to the database
the eligible responses are:

**Default**
Success = false
Reason = error
username = null

**Successful**
Success = true
Reason = information added
username = <username>

**Error**
success = false
reason = sql error
username = null

----------------Not done yet------------------

**Error**
success = fail
reason = username already exists
username = <username>



*/
session_start();
header('Content-type:text/javascript');
require '../config.php';
require_once('../functions.php');



//set the default response//
$json = array(
    'success' => false,
    'reason' => 'error',
    'username' => Null
    );
    
    //check if values are set, if no values are set return false
    if(!isset($_POST['real_name'],$_POST['user_name'],$_POST['password'],$_POST['email']))
    {
      $json['success'] = false;
      $json['reason'] = 'No Data Entered';
      $json['username'] = Null;
    }
    //if there are values
    else
    {
      //assign values to variables
      $fullname = $_POST['real_name'];
      $username = $_POST['user_name'];
      $password = $_POST['password'];
      $email = $_POST['email'];
    
      //check if username exists
      if (checkUserName($username,$connection))
      {
        //if it does return false with reason    
        $json['success'] = false;
        $json['reason'] = 'Is a user';
        $json['username'] = Null;
      
      }
      //otherwise build the query
      else
      {
      //create the query
      $query  = "INSERT INTO Users (user_id,name,password,username,email_address)";
      $query .= " VALUES (";
      $query .= " NULL,'$fullname','$password','$username','$email'";
      $query .= ")";
      
      
      //run the query
      $result = mysqli_query($connection, $query);
      
      
      //check result
        if ($result) 
        {
        // Success - tell the user
        $json['success'] = true;
        $json['reason'] = 'the information has been added to the database';
        $json['username'] = $username;
        $_SESSION['user'] = $username;
        
        
      
        //no result returned
        }  
        else if(!$result)
        {
          $json['success'] = false;
          $json['reason'] = "Result is null";
        }
        //Error
        else
        {
          $json['success'] = false;
          $json['reason'] = "Database query failed. " . mysqli_error($connection);
        }
      }
    }
   
    //send result
     echo json_encode($json);
     die();
   
?>


