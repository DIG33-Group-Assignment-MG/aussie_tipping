<?php 
//when a person enters our site index.php is where they will enter so here we, will do the following:
//for now I will destroy all previous sessions if a user goes to the index page. I am trying to find a way to "log out"
session_start();
session_destroy();
//$_SESSION['user'] = $_SESSION['user'];
//$_SESSION['userid'] = $_SESSION['userid'];
//if this is the first time they have entered the site the $_SESSION['user'] should be void of any value (!isset)
//run the config script to set up the connection strings etc
require_once('config.php');
//then run the functions script
require_once('functions.php');
//when I load this page I want to use get_sports_list to provide me the sports list and assignment it to an object
?>

<doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sports </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles2.css" rel="stylesheet" type="text/css">
  </head>
   

  <body class="bg2">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="container">
      <a class="navbar-brand" href="index.php">Aussie Tipping</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="sports.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
             <a class="dropdown-item" href="sports.php?id=1">NRL Tipping</a>
              <a class="dropdown-item" href="sports.php?id=2">AFL Tiiping</a>
              <a class="dropdown-item" href="sports.php?id=3">BBL Tipping</a>
            </div>
          
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
         
         </ul>
         <img src="images/Site/horse.png" width="40px" height="40px">
         </div>
         </div>
           
    </nav>
    <main >
    <div role="main" class="container">
     <br>
        <div class="content container mt-5 col-10">
         
          <!--carousel code-->
         <div class="jumbotron">
          <section class="col-sm-12">
            <div class="carousel" id="sportcarousel" data-ride="carousel">
                <div class="carousel-item active">
                <img class="img-fluid" width="100%" src="" alt="sport image" id="carousel1">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" width="100%" src="" alt="sport image" id="carousel2">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" width="100%" src="" alt="sport image" id="carousel3">
              </div>
              <a class="carousel-control-prev" href="#sportcarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                  <span class="sr-only">Previous</span>
                </span>
              </a>
              <a class="carousel-control-next" href="#sportcarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                  <span class="sr-only">Next</span>
                </span>
              </a>
            </div> <!--end carousel div-->
            
          </section> <!-- end carousel code-->
      
          <div id="whitebackgroundsport">
             <div class="container">
          <div class="row">
           <div>
         <img class="img-fluid col-3" width="100" src="" alt="sport image" id="sportlogo">
          </div>
          <div>
             <p class="text-center col-7" id="mainheading" ></p>
            </div>
            </div>  
            <h2 >Season Starts</h3>
            
            <p id="season_start"></p>
            
            <h3 >Number of Rounds</h3>
            
            <p id="number_of_rounds"></p>
            
            <h3>Final Date to Join or Create a Competition</h3>
            
            <p id="final_date"></p>
            
            <a href='registration.php'><button type='button' class='btn btn-primary' id='register_button'>Register</button></a> 
          </div>
          </div>
         </div>
         </div> <!--end content container-->
  
   </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="scripts/sports.js"></script>
  
  </body>
</html>