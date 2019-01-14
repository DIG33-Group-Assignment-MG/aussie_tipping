<?php
//API-Test is a playground for me to build our data links without breaking any of your design work
session_start();
//$_SESSION['user'] = $_SESSION['user'];
//$_SESSION['userid'] = $_SESSION['userid'];
//run the config script to set up the connection strings etc
require_once('config.php');
//then run the functions script
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
          </ul>
        <?php
        //when loading the nav bar, if the user has not logged in yet, then provide them with the login and register buttons
        if(!isset($_SESSION['user']))
        {
          echo "<a href='registration.php'><button type='button' class='btn btn-primary' id='register_button'>Register</button></a>";
          echo "<a href='login.php><button type='button' class='btn btn-secondary' id='login_button'>Login</button></a>";
        }
        //if they have logged in then welcome them with their username and make it a link to theier members dashboard
        else
        {
          echo "<a class='nav-link' href='Member.php?id={$_SESSION['userid']}' id='user_link'>Welcome {$_SESSION['user']}</a>";
          echo "<button type='button' class='btn btn-secondary' id='log_out_button'>Log Out</button>";
        }
        ?>
         
                     
        
  
    </div>
    </nav>

   <main>
       
    </br>
    </br>
    </br>
   <h1>API Test Page</h1>

    <p>I would like to use this page to start building the logic for our site. </p>

    <p>There will be not real styling to start with as I am still just getting a handle on the information side of things</p>

    <p>I will start building navbar items so you can start seeing responses as I build them. Think of it as our own Docs</p>



<!--Registration Form -->
    <h1 id="registration_header">New User</h1>

<form action="/APIs/register.php" method="post" id="register">
  <div class="form-group">
    <div class="col-4">
        <label for="full name">Full Name</label>
        <input type="text" class="form-control" name="real_name" autocomplete="name"  placeholder="Full Name">
    </div>
  </div>
  <div class="form-group">
    <div class="col-4">
        <label for="username">User Name</label>
        <input type="text" class="form-control" name="user_name" autocomplete="username" placeholder="Username" >
    </div>
  </div>
  <div class="form-group">
    <div class="col-4">
        <label for="InputPassword">Password</label>
        <input type="password" class="form-control" name="password" autocomplete="new-password" placeholder="Password" >
    </div>
  </div>
  <div class="form-group">
    <div class="col-4">
        <label for="InputEmail">Email address</label>
        <input type="email" class="form-control" name="email" autocomplete="email" aria-describedby="emailHelp" placeholder="Enter email" value="@email.com">
    </div>
  </div>
  <button type="submit" name="submit"  class="btn btn-primary" id="submit">Submit</button>
  
</form>
      <a href="index.php" class="btn btn-success" role="button" id="navigate">Successful</button></a>
  

<!-- Tipping competition Creator -->

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

</br>
</br>

<!-- Join a tipping Competition -->

<h2 id="join_header">Join A Tipping Competition</h2>
<p>Use this section to join a Tipping Competition</p>
<form action="/APIs/join_comp.php" method="post" id="join_tipping_comp">
    <div class="form-group">
    <div class="col-4">
    <label for="tipping_name">Select a Competition</label>
    <select class="form-control" name="tipping_comp_name" id="tipping_comp_selection" placeholder="Pick A Competition to Join">
      <?php getListOfCompetitions($connection) ?>
    </select>
    </div>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary" id="join_comp">Join Tipping Competition</button>
  </br>
  </br>
  
  
<!-- Session information -->  
  <h1>Session Information</h1>
  
    </main><!-- /.container -->
    
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



