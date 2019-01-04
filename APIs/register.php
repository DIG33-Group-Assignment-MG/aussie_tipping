<?php
header('Content-type:text/javascript');
require '../config.php';


//set the initial response//

$json = array(
    'success' => false,
    'reason' => 'error',
    'username' => Null
    );
    

    if(isset($_POST['real_name'],$_POST['user_name'],$_POST['password'],$_POST['email']))
    {
      $fullname = $_POST['real_name'];
      $username = $_POST['user_name'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      
      
      //create the query
      $query  = "INSERT INTO Users (user_id,name,password,username,email_address)";
      $query .= " VALUES (";
      $query .= " NULL,'$fullname','$password','$username','$email'";
      $query .= ")";
      
      
      //run the query
      $result = mysqli_query($connection, $query);
      
      
      
      //check result
      if ($result) {
      // Success - tell the user
      $json['success'] = true;
      $json['reason'] = 'the information has been added to the database';
      $json['username'] = $username;
      //die();
      //echo json_encode($json);
      //otherwise failed
      } 
      else if(!$result)
      {
        $json['success'] = false;
        $json['reason'] = "Result is null";
        //echo json_encode($json);
        //die();
      }
      else
      {
        $json['success'] = false;
        $json['reason'] = "Database query failed. " . mysqli_error($connection);
        //echo json_encode($json);
        //die();
      }
  }
 
     echo json_encode($json);
    
?>


