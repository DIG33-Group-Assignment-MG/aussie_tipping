<?php
session_start();
$userid =$_SESSION['userid'];
//hardcoded value for testing
//$userid =88;
header('Content-type:text/javascript');
require '../config.php';
require_once('../functions.php');

//this API will give a list of competitions that a user can join and will not include a list
//of competitions they have joined or are awaiting approval to join
    //echo $userid;
    $query  = "SELECT tipping_competition_id ";
	$query .= "FROM Tipping_Competition_Member";
	$query .= " WHERE NOT user_id='$userid'";
	
	echo $query;
	//run query
	$result = mysqli_query($connection, $query);
	//cho "I have checked for a result??";
	if(!$result)
	{
	    //echo "no result found";
	    return false;
	    
	}
	//echo "before making the array check that I make it here";
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) 
    {
               $r['tipping_competition_name']=getTippingCompName($r['tipping_competition_id'],$connection);
               $rows[] = $r;
    }
    if($rows)
    {
        //modify the outcome to replace ids with names
        
        // output JSON data    
        print json_encode($rows);    
    }
    else
    {
        print json_encode("No Results found!!");    
    }





 
function getTippingCompName($compid,$connection)
{
	
	$query  = "SELECT competition_name ";
	$query .= "FROM Tipping_Competition WHERE tipping_competition_id='$compid'";
	
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
	    return false;
	}
	else
	{
		$row = mysqli_fetch_assoc($result);
	}
	
	return $row['competition_name']; 
	
}	

?>