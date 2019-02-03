<!-- This page will be used to register a user

it will take a name, a username, a password and an email.

Username and Email both need to be unique

This page will only be accessible to a guest

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

    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles2.css" rel="stylesheet" type="text/css">
  </head>

  <body>
  
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="container">
     <a class="navbar-brand" href="index.php">Aussie Tipping</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
         
          </ul>
       
       
  
    </div>
    </nav>
 </div>
 <main class="bg">
  
    <div id="whitebackground">
    <br>
     <h1 class="text-center">Registration</h1>

    <h2 class="text-center" id="registration_header">New User</h2>
    
    

<form action="/APIs/register.php" method="post" id="register" >
  <div class="form-group d-flex justify-content-sm-center">
   
        <label class="form-control-label" for="full name">Full Name</label>
        <input type="text" class="form-control" name="real_name" autocomplete="name"  placeholder="Full Name">
    </div>
  
  <div class="form-group d-flex justify-content-sm-center">
   
        <label class="form-control-label" for="username">User Name</label>
        <input type="text" class="form-control" name="user_name" autocomplete="username" placeholder="Username" >
    </div>
  
  <div class="form-group d-flex justify-content-sm-center">
  
        <label class="form-control-label" for="InputPassword">Password</label>
        <input type="password" class="form-control" name="password" autocomplete="new-password" placeholder="Password" >
    </div>
  
  <div class="form-group d-flex justify-content-sm-center">
  
        <label class="form-control-label" for="InputEmail">Email address</label>
        <input type="email" class="form-control" name="email" autocomplete="email" aria-describedby="emailHelp" placeholder="Enter email" value="@email.com">
  
  </div>
  <div class="text-center">
  <button type="submit" name="submit"  class="btn btn-primary btn-center" id="submit">Submit</button>
  </div>
</form>
      <!--not sure what this line in the original code does-->
      <a href="index.php" class="btn btn-success" role="button" id="navigate">Successful</button></a>
 </main>

 </div>



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



