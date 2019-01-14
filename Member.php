<?php 
//session_start();
require_once('config.php');
require_once('functions.php');
session_start();



/*this will be the member's "Dashboard" and will comprise of the following "pages" as sections from the proposal:
-Member's page
-Competition Page
-Admin Page
It will be associated to a member so will be accessed using a url "Members?id=<member ID>"
This member id will be passed from the registration or the login page as a POST and I will use GET to start compiling the user's information.

Things the user will be able to see on this page:



******Member's Section*******
-A drop down containing a list of the competitions the member is part of
When a competition is selected the following information will be provided
-Number of successful tips they have made for this competition
-A view of the tips from the previous round and which ones were succesful
-The next weeks schedule
-A ladder containing the order of players in the competition selected


******Competition Section*****
Creat a competition - allows the user to create a competition and be the first user added as an admin **Half complete**
Join A competition - allows a user to select a competition they wish to join, this is meant to put them in a staging table for the admin page to view and accept



*****Admin Page*************
For user's that are set as admins for a page eg the creator, this page will allow them to select which users are allowed in the competition
This page will have a full name box and a username box which are read only and will list the <username> and <full name> and which competition they are wanting to access
There will be an accept button and a decline button next to each row  of user
-If the user selects accept, the user that made the request will be added as a member of the competition they were accepted in to and deleted from the staging table
-If the user is declined from the competition they will be removed from the competition, at the moment they will not be alerted that their request has been rejected or accepted.
*/


//set user id
//$userid = $_GET['id'];
//$username = getUserName($userid,$connection);
//get the user information


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Tipping</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">Aussie Tipping</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">

            
            <a class="nav-link" href="#">User APIs</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tipping_comp_header">Competition APIs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sport APIs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="phpmyadmin" target="_blank">phpMyAdmin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Member.php?id=1">Member Page</a>
          </li>
         </ul>
        
        
  
    </div>
    </nav>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <main>
    <h1>Welcome <?php echo $_SESSION['user']?> </h1>
    
    
        <h1 id="tipping_comp_header">Create Tipping Competition</h1>
<form action="/APIs/create_comp.php" method="post" id="register_comp">
  <div class="form-group">
    <div class="col-4">
        <label for="comp name">Competition Name</label>
        <input type="text" class="form-control" name="competition_name" id="competition_name" >
    </div>
    </br>
   <div class="form-group">
     <div class="col-4">
    <label for="sport">Select a Sport</label>
    <select class="form-control" name="sport_name" id="sport_selection">
      <option value="1">NRL</option>
      <option value="2">AFL</option>
      <option value="3">BBL</option>
    </select>
    </div>
  </div>
</br>
  <button type="submit"  name="submit" class="btn btn-primary" id="submit_comp">Create your competition</button>
  
</form>
      <a href="index.php" class="btn btn-success" role="button" id="navigate">Successful</button></a>
  </body>
</html>      
  
  
    </main>





