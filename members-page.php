<?php
session_start();
require_once('functions.php');




?>
<!doctype html>
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
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="container">
      <a class="navbar-brand" href="#">Aussie Tipping</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item">
            <a class="nav-link" href="index.php">Home Page</a>
          </li><li class="nav-item">
            <a class="nav-link" href="tipping-page.php" target="_blank">Tipping</a>
          </li><li class="nav-item">
            <a class="nav-link" href="members-page.php">Members <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">User APIs</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">Sport APIs</a>
          </li>
        </ul>
        <a href="registration.php" button type="button" class="btn btn-primary">Register</a>
        <button type="button" class="btn btn-secondary">Login</button>
  
    </div>
    </nav>
</div>
  <main>
  <div class="container mt-5">     
    </br>
  <!--once logged in the member's name will automatically appear here when the member navigates to this page-->
  
   <h1 class="text-center">Member's Name</h1>
   
  <div class="container">
  <div class="row">
   <div class="col-md-8">
     <h2 class="text-center">Competition</h2>
   <!--placeholder for competition-->
   <div class="form-group">

    <label><h4>Select a Competition</h4></label>
    
    <select class="form-control" name="#" id="#">
      <option value="1">Place Holder for Competition</option>
     </select>
   </div>
        <p>If you are not a member of a tipping competition, join or create a competition further down this page.</p> 
        </div>
    <div class="col-sm-4 mt-5">
       <a href="tipping-page.php" button type="button" class="btn btn-success btn-lg"><h1>Tipping</h1></a>
     </div>
    </div> <!--row -->
    </div> <!--container -->
    
    
  <div class="container">
    <div class="row">
     <div class="col-8">
        <!--placeholder for competition name selected using the above drop down-->
      <h4 class="text-center">Competition's Name</h4>
      <article>
      <!--placeholder for players status-->
      <h5>Player Status (Placeholder)</h5>
      
      <p>You have picked (number variable) of winners and are (position variable) in your competition.</p>
      
      <!--placeholder for last round results with red cross or green arrow according to whether the player choose picked correctly-->
      <h5>Results Last Round (Placeholder)</h5>
      
      <!--placeholder for the games season fixture-->
      <h5>Games Schedule (Placeholder)</h5>
      </article>
      </div>
      
    <div class="col-4">
      <!--placeholder for competition ladder-->
      <h4 class="text-center">Competition Ladder (Placeholder) </h4>
      <h5>Rank |     Name     | Score</h5>
      
      
      
      
    </div>
    </div> <!--row -->
    </div> <!--container-->
      
<hr>
  
<!-- Tipping competition Creator -->
<div class="container">
  <div class="row">
  <div class="col-sm-6 order-2">
  <h2 id="tipping_comp_header">Create Competition</h2>
 <p>If you want to create a competition enter a name for the competition, select the sport and click on Create a Competition</p> <form action="/APIs/create_comp.php" method="post" id="register_comp">
  <div class="form-group">
    <div>
        <label for="comp name"><h3>Competition Name</h3></label>
        
        <input type="text" class="form-control" name="competition_name" id="competition_name" >
    </div>
    </br>
   <div class="form-group">
     <div>
    <label for="sport"><h4>Select a Sport</h4></label>
    <select class="form-control" name="sport_name" id="sport_selection">
      <option value="1">NRL</option>
      <option value="2">AFL</option>
      <option value="3">BBL</option>
    </select>
    </div>
  </div>
</br>
  <button type="submit"  name="submit" class="btn btn-primary" id="submit_comp">Create a competition</button>
  </div>
</form>
      <a href="index.php" class="btn btn-success" role="button" id="navigate">Successful</button></a>

</div>
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
  <div class="row">
  <div class="col-sm-6">
  <h2 class="text-center">Administration</h2>
  <h5>Name | Username</h5>
  </div>
  <div class="col-2 mt-5">
  <button type="submit"  name="allow" class="btn btn-primary" id="join_comp">Allow</button>
  <button type="submit"  name="delete" class="btn btn-primary" id="join_comp">Delete</button>
  </div>
</div>
</div><!--row-->
</div><!--container-->

 
  
  
  
    
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



