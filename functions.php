<?php

//this file contains functions for the website
include 'config.php';

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

function getUserName()
{
	 echo "<h3 id='session'>{$_SESSION["user"]}</h3>";
}


?>