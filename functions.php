<?php

//this file contains functions for the website
require_once('config.php');

function checkUserName($username,$connection)
{
    
    $query  = "SELECT * ";
	$query .= "FROM Users";
	

	//run query
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
	    return false;
	}
	
	//loop through results until 1 matches then exit out
	while($row = mysqli_fetch_assoc($result))
	{
	 if ($row['username'] == $username)
	 {
	     return true;
	 }
	}
}


function checkCompetitionName($name,$connection)
{
    
    $query  = "SELECT * ";
	$query .= "FROM Tipping_Competition";
	

	//run query
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
	    return false;
	}
	
	//loop through results until 1 matches then exit out
	while($row = mysqli_fetch_assoc($result))
	{
	 if ($row['competition_name'] == $name)
	 {
	     return true;
	 }
	}
}

function getListOfCompetitions($connection)
{
	$query  = "SELECT * ";
	$query .= "FROM Tipping_Competition";
	
	//run query
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
	    return false;
	}
	
	while($row = mysqli_fetch_assoc($result))
	{
		$optionNumber = 1;	
		echo "<option value='$optionNumber'>{$row["competition_name"]}</option>";
		$optionNumber +=1;
	}

}

function getUserName($userid,$connection)
{
	 $query = "SELECT * ";
	 $query .=" FROM Users ";
	 $query .="WHERE user_id='$userid'";
	
	
	$result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    
    //Check results for errors
    if(!$result)
    {
        die("Database query failed.");
    }
    else
    {
        return $row['username'];
    }
}

function getCompsForUser($userid,$connection)
{
	
	
	
	// $userCompQuery  ="SELECT Tipping_Competition_Member.user_id,Tipping_Competition_Member.tipping_competition_id,Tipping_Competition.tipping_competition_id,Tipping_Competition.competition_name";
	// $userCompQuery .=" FROM Tipping_Competition_Member";
	// $userCompQuery .=" INNER JOIN Tipping_Competition_Member ON Tipping_Competition_Member.tipping_competition_id=Tipping_Competition.tipping_competition_id";
	// $userCompQuery .=" WHERE Tipping_Competition_Member.user_id = '$userid';";
	
	$query = "SELECT DISTINCT Tipping_Competition_Member.user_id,Tipping_Competition_Member.tipping_competition_id,Tipping_Competition.tipping_competition_id,Tipping_Competition.competition_name";
	$query .=" FROM Tipping_Competition_Member";
	$query .=" INNER JOIN Tipping_Competition ON Tipping_Competition_Member.tipping_competition_id=Tipping_Competition.tipping_competition_id";
	$query .=" WHERE Tipping_Competition_Member.user_id = '$userid';";
	
	
	// echo "<br>";
	// echo $userCompQuery;
	// echo "<br>";
	
	// echo "<br>";
	// echo $query;
	// echo "<br>";
	
	
	$result = mysqli_query($connection,$query);
	if (!$result)
	{
		echo "no result";
	}
	else
	{
		
		while($row = mysqli_fetch_assoc($result))
		{
			
		echo "<option value='{$row['tipping_competition_id']}'>{$row["competition_name"]}</option>";
			
		}
	}
	
}

function getRoundDetails($sport,$round,$connection)
{
	//to keep it simple we will request 1 round at a time for now
	$query = "SELECT * ";
	$query .=" FROM Sport_Round ";
	$query .="WHERE sport_round_id='$round' AND sport_id='$sport'";
	
	$result = mysqli_query($connection,$query);
	
	$row = mysqli_fetch_assoc($result);
	
	return $row;

}

function getRoundMatches($sport,$round,$connection)
{
	$sql = "SELECT Sports_Round_Matches.match_id,Sports_Round_Matches.sport_round_id,Sports_Round_Matches.Home_Team_ID,Sports_Round_Matches.Away_Team_ID,Sports_Round_Matches.fixture_day,Sports_Round_Matches.fixture_time,Sports_Round_Matches.Result,Sports_Round_Matches.Closing_Date,Sport_Round.sport_id\n"
    . "FROM Sports_Round_Matches \n"
    . "INNER JOIN Sport_Round \n"
    . "ON Sports_Round_Matches.sport_round_id = Sport_Round.sport_round_id\n"
    . "WHERE Sports_Round_Matches.sport_round_id=1 AND Sport_Round.sport_id=1 LIMIT 0, 30 ";
	
	$result = mysqli_query($connection,$sql);
	
	while($row = mysqli_fetch_assoc($result))
		{
			
		echo $row["match_id"];
		echo $row["sport_round_id"];
		echo $row["Home_Team_ID"];
		echo $row["Away_Team_ID"];
		echo $row["fixture_day"];
		echo $row["fixture_time"];
		echo $row["Result"];
		echo $row["Closing_Date"];
		echo $row["sport_id"];
			
		}
	
	
}


function getNumberOfMatchesInRound($sport,$round,$connection)
{
	
	$query = "SELECT COUNT(sport_round_id) AS 'num_of_matches'";
	$query .=" FROM Sports_Round_Matches ";
	$query .="WHERE sport_round_id='$round' AND sport_id='$sport'";
	
	$result = mysqli_query($connection,$query);
	
	$row = mysqli_fetch_assoc($result);
	
	return $row['num_of_matches'];

}

function getTeamName($teamid,$connection)
{
	$query = "SELECT team_name";
	$query .=" FROM Teams";
	$query .=" WHERE team_id = $teamid";
	
	$result = mysqli_query($connection,$query);
	
	$row = mysqli_fetch_assoc($result);
	
	return $row['team_name'];
	
}

?>