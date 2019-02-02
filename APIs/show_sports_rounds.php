<?php
//This will return a list of the Rounds in a Sport and Season

//Example
/* if you Post 
Sport_id = 1 and Season = 2018
The response you will will receive is
[
{"name":"NRL","season":"2018","round_number":"1","start_date":"2018-03-08","end_date":"2018-03-11"},
{"name":"NRL","season":"2018","round_number":"2","start_date":"2018-03-15","end_date":"2018-03-18"},
{"name":"NRL","season":"2018","round_number":"3","start_date":"2018-03-22","end_date":"2018-03-25"},
{"name":"NRL","season":"2018","round_number":"4","start_date":"2018-03-29","end_date":"2018-04-02"},
{"name":"NRL","season":"2018","round_number":"5","start_date":"2018-04-05","end_date":"2018-04-08"},
{"name":"NRL","season":"2018","round_number":"6","start_date":"2018-04-12","end_date":"2018-04-15"},
{"name":"NRL","season":"2018","round_number":"7","start_date":"2018-04-19","end_date":"2018-04-22"},
{"name":"NRL","season":"2018","round_number":"8","start_date":"2018-04-25","end_date":"2019-04-29"},
{"name":"NRL","season":"2018","round_number":"9","start_date":"2018-05-03","end_date":"2018-05-06"},
{"name":"NRL","season":"2018","round_number":"10","start_date":"2018-05-10","end_date":"2018-05-13"},
{"name":"NRL","season":"2018","round_number":"11","start_date":"2018-05-17","end_date":"2018-05-20"},
{"name":"NRL","season":"2018","round_number":"12","start_date":"2018-05-22","end_date":"2018-05-27"},
{"name":"NRL","season":"2018","round_number":"13","start_date":"2018-05-31","end_date":"2018-06-03"},
{"name":"NRL","season":"2018","round_number":"14","start_date":"2018-06-08","end_date":"2018-06-11"},
{"name":"NRL","season":"2018","round_number":"15","start_date":"2018-06-14","end_date":"2018-06-17"},
{"name":"NRL","season":"2018","round_number":"16","start_date":"2018-06-28","end_date":"2018-07-01"},
{"name":"NRL","season":"2018","round_number":"17","start_date":"2018-07-05","end_date":"2018-07-08"},
{"name":"NRL","season":"2018","round_number":"18","start_date":"2018-07-13","end_date":"2018-07-15"},
{"name":"NRL","season":"2018","round_number":"19","start_date":"2018-07-19","end_date":"2018-07-22"},
{"name":"NRL","season":"2018","round_number":"20","start_date":"2018-07-26","end_date":"2018-07-29"},
{"name":"NRL","season":"2018","round_number":"21","start_date":"2018-08-02","end_date":"2018-08-05"},
{"name":"NRL","season":"2018","round_number":"22","start_date":"2018-08-08","end_date":"2018-08-12"},
{"name":"NRL","season":"2018","round_number":"23","start_date":"2018-08-16","end_date":"2018-08-19"},
{"name":"NRL","season":"2018","round_number":"24","start_date":"2018-08-23","end_date":"2018-08-26"},
{"name":"NRL","season":"2018","round_number":"25","start_date":"2018-08-30","end_date":"2018-09-02"}
]
*/
session_start();
$userid =$_SESSION['userid'];
header('Content-type:text/javascript');
require '../config.php';
require_once('../functions.php');


//get the id from the request
//our query should receive a Sport Name **Hardcoded at the moment**
$sport_id = 1;
//and a season **Hardcoded at the moment**
$season_year = 2018;
//our query has to return a list of round objects which contain (sport name, season, round number, start date, end date)

$sport_query = "SELECT Sports.name,Sport_Round.season,Sport_Round.round_number,Sport_Round.start_date,Sport_Round.end_date";
$sport_query .=" FROM Sport_Round";
$sport_query .=" INNER JOIN Sports ON Sport_Round.sport_id = Sports.sport_id";
$sport_query .=" WHERE Sport_Round.sport_id = $sport_id and Sport_Round.season =$season_year;";
echo $sport_query;


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



  

?>



