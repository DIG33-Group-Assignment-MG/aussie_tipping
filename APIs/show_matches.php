<?php
//This will return a list of matches in a Round of Sport Season

//Example
/* if you Post 
Sport_id = 1 and Season = 2018 round = 2
The response you will will receive is
[
{"Home_Team_ID":"Cronulla-Sutherland Sharks","Away_Team_ID":"St. George Illawarra Dragons","fixture_day":"Thursday","fixture_time":"20:05:00"},
{"Home_Team_ID":"Sydney Roosters","Away_Team_ID":"Canterbury-Bankstown Bulldogs","fixture_day":"Friday","fixture_time":"18:00:00"},
{"Home_Team_ID":"Brisbane Broncos","Away_Team_ID":"North Queensland Cowboys","fixture_day":"Friday","fixture_time":"20:05:00"},
{"Home_Team_ID":"New Zealand Warriors","Away_Team_ID":"Gold Coast Titans","fixture_day":"Saturday","fixture_time":"15:05:00"},
{"Home_Team_ID":"Penrith Panthers","Away_Team_ID":"South Sydney Rabbitohs","fixture_day":"Saturday","fixture_time":"17:30:00"},
{"Home_Team_ID":"Melbourne Storm","Away_Team_ID":"Wests Tigers","fixture_day":"Saturday","fixture_time":"19:35:00"},
{"Home_Team_ID":"Manly Warringah Sea Eagles","Away_Team_ID":"Parramatta Eels","fixture_day":"Sunday","fixture_time":"16:10:00"},
{"Home_Team_ID":"Canberra Raiders","Away_Team_ID":"Newcastle Knights","fixture_day":"Sunday","fixture_time":"18:30:00"}
]
*/
session_start();
$userid =$_SESSION['userid'];
header('Content-type:text/javascript');
require '../config.php';
require_once('../functions.php');

//we need to know the sport_round_id (because round 1 in 2018 for the NRL is different then round 1 for the AFL or BBL)
//need to know the sport
$sport_id = 1;
//need to know the season
$season_year = 2018;
//need to know round of the season (eg round 2 of 2018)
$round_number = 5;

$round_query = "SELECT sport_round_id";
$round_query .= " FROM Sport_Round ";
$round_query .= "WHERE sport_id = $sport_id AND season = $season_year AND round_number= $round_number";
//echo $round_query;
$roundID_result = mysqli_query($connection, $round_query);

$row = mysqli_fetch_assoc($roundID_result);
$round_id = $row['sport_round_id'];



//our query has to return a list of match objects which contain (home_team, away_team, game_location,game start time,)

$sport_query = "SELECT Home_Team_ID,Away_Team_ID,fixture_day,fixture_time";
$sport_query .=" FROM Sports_Round_Matches";
$sport_query .=" WHERE sport_round_id = $round_id";
//echo $sport_query;



$sport_result = mysqli_query($connection, $sport_query);
$rows = array();
while($r = mysqli_fetch_assoc($sport_result)) {
    $r['Home_Team_ID'] = getTeamName($r['Home_Team_ID'],$connection);
    $r['Away_Team_ID'] = getTeamName($r['Away_Team_ID'],$connection);
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