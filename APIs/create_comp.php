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


**Error**
success = fail
reason = competition name already exists
username = <username>

*/
session_start();
$userid =$_SESSION['userid'];
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
      //create the query to create the competition
      $create_comp_query  = "INSERT INTO Tipping_Competition (tipping_competition_id,sport_id,competition_name)";
      $create_comp_query .= " VALUES (";
      $create_comp_query .= " NULL,'$sport_id','$comp_name'";
      $create_comp_query .= ")";
      
      //run the query
        $create_comp_result = mysqli_query($connection, $create_comp_query);
      //echo $query;
      //check result
        if ($create_comp_result) 
            {
            //get the id for the comp just created
            $IDquery = "SELECT MAX(tipping_competition_id) as comp_id ";
            $IDquery .="FROM Tipping_Competition";
            $IDresult = mysqli_query($connection, $IDquery);
            
            $row = mysqli_fetch_assoc($IDresult);
            //assign it to this variable
            $tipping_comp_id=$row['comp_id'];
        
            //create a query to INSERT data in to table 'Tipping_Competition_Member'
            //This table has the following columns:
            $join_comp_query ="INSERT INTO Tipping_Competition_Member (tipping_comp_member_id,user_id,tipping_competition_id,isAdmin)";
            $join_comp_query .=" VALUES (";
            $join_comp_query .=" NULL,'$userid','$tipping_comp_id',1";
            $join_comp_query .=")";
            $join_result = mysqli_query($connection, $join_comp_query);
            
            //once this is done it is a true success and we can inform the user
            if(!$join_result)
                {
                    $json['success'] = false;
                    $json['reason'] = "There was any issue joining the competition";  
                }
                else
                {
                    $json['success'] = true;
                    $json['reason'] = 'the competition has been created and you are the administrator';
                    $json['compname'] = $comp_name;
                }
            }
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
