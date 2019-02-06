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

  <body class="bg2">
  
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="container">
     <a class="navbar-brand" href="index.php">Aussie Tipping</a>
     
       <img src="images/Site/horse.png" width="40px" height="40px">
    </div>
    </nav>
 </div>
 <main class="bg2">
    <br>
   <div class="container mt-4">
    <div id="whitebackground">
        <div class="jumbotron mt-5">
   
     <h1 class="text-center" id="mainheading">About Us</h1>
     <div class="row">
     <div class="col-md-4" >
         
        <p id="about">We are an international beer brewer that sponsors many large national sporting 
        codes and events. These include the National Rugby League, Australian Football League
        and The Big Bash League.</p> 

        <p id="about">Beer and sport go together like beer. Having a beer with your mates and enjoying many
        of the sports Australia has to offer is a national past time. We have created a free tipping
        competition for you, be you a loyal customer or a potential future customer. While watching
        your sport, why not enjoy a Horse beer.</p> 

     </div>
     <div class="col-md-8">
         
     <img class="img-fluid" src="images/Site/horsedry.png"> 
     <img class="img-fluid" src="images/Site/horselime.png">
     <img class="img-fluid" src="images/Site/horsecan.png">
    </div>
    </div>
   
 </main>
  <div class="footer">
  <p>&copy; 2019. Contact: info@horselarger.com.</p>
</div>
</div>
 </div>



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



