<!-- This page will be used to log an existing user in

it will take a username & a password and it will check on the database using a function?

Username and Email both need to be unique

This page will only be accessible to a guest

-->

<?php

//At the top of this page we need to start/resume the session
session_start();
//then we need to use the config.php for access to the DB
require_once('config.php');
//then we will access the functions file
require_once('functions.php');

?>

<!-- Page content -->
<!-- Navbar only needs basic content -->
<doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles2.css" rel="stylesheet" type="text/css">>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="container">
      <a class="navbar-brand" href="index.php">Aussie Tipping</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
       
        </div>
         <img src="images/Site/horse.png" width="40px" height="40px">  
         </div>
        </nav>
  <main class="bg">
   <div class="container mt-4 col-md-4">
    <br>
    <br>
    <div id="whitebackground-login">
       
         <h1 id="registration_header">Login</h1>

<form action="/APIs/login_user.php" method="post" id="login_user">
  <div class="form-group">
    <div class="col-12">
        <label for="username">User Name</label>
        <input type="text" class="form-control" name="user_name" autocomplete="username" placeholder="Username" required>
        
    </div>
  </div>
  <div class="form-group">
    <div class=col-12>
        <label for="InputPassword">Password</label>
        <input type="password" class="form-control" name="password" autocomplete="new-password" placeholder="Password" required>
    </div>
    <br>
    
  <button type="submit" name="submit"  class="btn btn-primary" id="submit_login" >Submit</button>
  
</form>
     </div>
     </div>
     </div>
     </main>
     
        
           <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="scripts/global.js"></script>
  </body>
  
  
</html>