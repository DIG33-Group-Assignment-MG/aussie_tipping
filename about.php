<!-- This page is the about page -->

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

    <title>About Us</title>

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
           <li class="nav-item">
            <a class="nav-link" href="sports.php">Sports</a>
         </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
         </li>
          </ul>
        <a href='registration.php'><button type='button' class='btn btn-primary' id='register_button'>Register</button></a> 
        <button type="button" class="btn btn-secondary">Login</button>
  
    </div>
    </nav>
 </div>
 <main class="bg">
   <div class="container mt-5">
    <div id="whitebackground">
    <br>
     <h1 class="text-center" id+"mainheading">About Us</h1>

   
 </main>
</div>
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



