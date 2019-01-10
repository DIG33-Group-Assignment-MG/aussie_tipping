<?php
/*This page is used to submit the request for a new tipping competition to be made

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
reason = competition name already exists
username = <username>

*/

header('Content-type:text/javascript');
require '../config.php';
require_once('../functions.php');



//set the default response//
$json = array(
    'success' => false,
    'reason' => 'error',
    'compname' => Null
    );
    
    //check if values are set
    if(isset($_POST['competition_name'],$_POST['sport_name']))
    {
      //assign values to variables
      $comp_name = $_POST['competition_name'];
      $sport_id = $_POST['sport_name'];
    
      
      //check if the competition exists
      if (checkCompetitionName($comp_name,$connection))
      {
        
        $json['success'] = false;
        $json['reason'] = 'This competition Exists';
        $json['compname'] = $comp_name;
      
      }
      else
      {
      //create the query
      $query  = "INSERT INTO Tipping_Competition (tipping_competition_id,sport_id,competition_name)";
      $query .= " VALUES (";
      $query .= " NULL,'$sport_id','$comp_name'";
      $query .= ")";
      
      //echo $query;
      //run the query
      $result = mysqli_query($connection, $query);
      //echo $query;
      
      
      //check result
      if ($result) 
      {
       // Success - tell the user
        $json['success'] = true;
        $json['reason'] = 'the information has been added to the database';
        $json['compname'] = $comp_name;
      
        //no result returned
        }  
        // else if(!$result)
        // {
        //   $json['success'] = false;
        //   $json['reason'] = "Result is null";
        // }
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

   
?>
