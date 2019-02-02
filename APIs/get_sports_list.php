<?php
//get_sports_list will provide data from the sports table (id,name,description,logo address)
//successful result example
/*
[
    {"sport_id":"1","name":"NRL","season":"2018","number of rounds":"26","description":"The Australian Rugby League premiere competition","sport_logo":""},
    {"sport_id":"2","name":"AFL","season":"2018","number of rounds":"26","description":"","sport_logo":""},
    {"sport_id":"3","name":"Big Bash League","season":"2018","number of rounds":"10","description":"","sport_logo":""}
]
*/    

session_start();
header('Content-type:text/javascript');
require_once ('../config.php');
require_once('../functions.php');
//This will return a list of the Sports available and 

//get the id from the request



$sport_query = "SELECT *";
$sport_query .=" FROM Sports ";


$sport_result = mysqli_query($connection, $sport_query);
$rows = array();
while($r = mysqli_fetch_assoc($sport_result)) {
    $rows[] = $r;
}
if($rows)
    {
    // output JSON data    
    print json_encode($rows);    
    }
else
    {
        print json_encode("No Results found!!");    
    }


?>

    
        
    