
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

<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Members Page</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles2.css" rel="stylesheet" type="text/css">
  </head>

  <body>
<!-- Nav Menu -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">Aussie Tipping</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item">
              <a class="nav-link" href="tipping-page.php" target="_blank">Tipping</a>
            </li>
             
        </ul>
        <img src="images/Site/horse.png" width="40px" height="40px"> 
      </div>
    </nav>
  
<main class="bg2">
<!-- Div 1 Should contain the member's page from the proposal-->
<div class="container mt-5" id="whitebackground" >
</br>
<!--This includes the Member's name-->
<h1 class="text-center" id="Members_Title">Welcome <?php echo $_SESSION['user']?></h1>
</br>
  <div class="container" id="Members_Page">
  <div class="row">
   <div class="col-md-8">
    <p>This is your Members home page. From here you can view a list of all of your tipping competitions as well view a snapshot of your results, the next round's schedule or the current rounds matches</p>
    </br>
    <label><h4>Select a Competition</h4></label>
    <!-- here we want a list of competitions the member is enrolled in **Complete**-->
    <select class="form-control" name="UserComps" id="select_user_competition" placeholder="Pick A Competition to Join">
      <?php getCompsForUser($_SESSION['userid'],$connection) ?>
    </select>
    
  
           <p>If you are not a member of a tipping competition, <a href="#competitions">join or create a competition further down this page.</a></p> 
        </div>
    <div class="col-sm-4 mt-5">
       <a href="tipping-page.php" button type="button" class="btn btn-success btn-lg"><h1>Tipping</h1></a>
     </div>
    </div> 
    </div>
    
  <div class="container">
    <div class="row">
     <div class="col-8">
        <!--placeholder for competition name selected using the above drop down-->
      <h4 class="text-center" id="name_of_competition">Competition's Name</h4>
      <article>
      <!--placeholder for players status-->
      <h5>Player Status (Placeholder)</h5>
      <p><?php echo "{$_SESSION['user']} picked (number variable) of winners and is currenty (position variable) in your competition.</p>";?>
      
      <!--placeholder for last round results with red cross or green arrow according to whether the player choose picked correctly-->
      <h5>Results Last Round (Placeholder)</h5>
       <p><?php echo "{$_SESSION['user']} picked (number variable) of winners in the last round";?>
      <!--placeholder for the games season fixture-->
      <h5>Games Schedule (Placeholder)</h5>
      </article>
      </div>
      
    <div class="col-4">
      <!--placeholder for competition ladder-->
      <h4 class="text-center">Competition Ladder (Placeholder) </h4>
     <table class="table table-responsive">
  <thead class="thead-light"><tr><th scope="col">Rank</th><th scope="col">Username</th><th scope="col">Points</th><th scope="col"></th></tr></thead>
  <tbody>
    <tr><th scope="row">1</th><td> <?php echo "{$_SESSION['user']}";?></td><td>200</td></tr>
      <tr><th scope="row">2</th><td>Graham</td><td>199</td></tr>
      <tr><th scope="row">3</th><td>Michael</td><td>70</td></tr>
      <tr><th scope="row">4</th><td>Sarah</td><td>53</td></tr>
      <tr><th scope="row">4</th><td>King</td><td>48</td></tr>
      <tr><th scope="row">6</th><td>Massive</td><td>45</td></tr>
      <tr><th scope="row">7</th><td>Dingdong</td><td>44</td></tr>
      <tr><th scope="row">8</th><td>Josh</td><td>43</td></tr>
      <tr><th scope="row">9</th><td>Wemdh</td><td>42</td></tr>
      <tr><th scope="row">10</th><td>Magpie</td><td>0</td></tr>
     
  
  </tbody>
</table>
    </div> <!--container-->
      
<hr>
  
<!-- Tipping competition Creator -->
<div class="container" id="competitions">
  <div class="row">
  <div class="col-sm-6 order-2">
  <h2 id="tipping_comp_header">Create Competition</h2>
 <p>If you want to create a competition enter a name for the competition, select the sport and click on Create a Competition</p> <form action="/APIs/create_comp.php" method="post" id="register_comp">
  <div class="form-group">
   <label for="comp name"><h3>Competition Name</h3></label>
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
  </div>
  </div>
  
  
</br>
  <button type="submit"  name="submit" class="btn btn-primary" id="submit_comp">Create your competition</button>
  </div>
</form>

<div class="col-sm-6">
<h2 id="join_header">Join Competition</h2>
<p>If you know the name of a tipping competition you have been invited to join, select it from the drop down list and then click on Join a Competition.</p>
<form action="/APIs/join_comp.php" method="post" id="join_tipping_comp">
    <div class="form-group">
    <div>
    <label for="sport"><h4>Select a Competition</h4></label>
    <select class="form-control" name="tipping_comp_name" id="tipping_comp_selection">
      <?php getListOfCompetitions($connection) ?>
    </select>
    </br>
  <button type="submit"  name="submit" class="btn btn-primary" id="join_comp">Join a competition</button>
 </div>
 </div>
 </div> <!--row -->
 </div> <!-- container -->
 
 <hr>
 
 <div class="container">
  <div class="col-sm-6">
 
  

  <label><h4>Administration (placeholder)</h4><label>
      <p>Allow or delete those who want to join your competition.</p> 
    <p>Username</p>
    <?php echo "{$_SESSION['user']}";?>
 
  <button type="submit"  name="allow" class="btn btn-primary" id="join_comp">Allow</button>
  <button type="submit"  name="delete" class="btn btn-primary" id="join_comp">Delete</button>
  </div>
  <a href="#Members_Title">back to top</a>
</div>
</div><!--container-->
</main>
 
  
  
  
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="global.js"></script>
  
  </body>
  
  
</html>


