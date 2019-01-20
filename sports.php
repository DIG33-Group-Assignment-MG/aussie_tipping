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
?>

<doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sports</title>

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
        <ul class="navbar-nav mr-auto">
          
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="sports.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">NRL Tipping</a>
              <a class="dropdown-item" href="#">AFL Tiiping</a>
              <a class="dropdown-item" href="#">BBL Tipping</a>
            </div>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
           </li><li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li><li class="nav-item"></li>
          </ul>
        </div>
         </div>
           <a href='registration.php'><button type='button' class='btn btn-primary' id='register_button'>Register</button></a> 
         <a href='login.php'><button type='button' class='btn btn-primary' id='login_button'>Login In</button></a> 
    </nav>
    <main class="bg">
    <div role="main" class="container mt-4">
      <br>
       <h1 class="text-center mt-4" id="mainheading">Sport (Placeholder)</h1>
    
    
    <div class="content container mt-3">
       <div class="row">
          <div class= "col-sm-6 mt-3" id="whitebackground">
            <h3>Season Starts</h3>
            
            <p>(Date placeholder)</p>
            
            <h3>Number of Rounds</h3>
            
            <p>(Rounds placeholder)</p>
            
            <h3>Final Date to Join or Create a Competion</h3>
            
            <p>(Final date placeholder)</p>
            
            <a href='registration.php'><button type='button' class='btn btn-primary' id='register_button'>Register</button></a> 
          </div>
          <!--carousel code-->
          <section class="col-sm-6">
            <div class="carousel" id="sportcarousel" data-ride="carousel">
              <div class="carousel-item active">
                <img class="img-fluid" src="images/bencutting.png" alt="Cricketer Ben Cutting">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="images/footy.png" alt="Geelong V Essendon">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="images/nrlmain.png" alt="Broncos">
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
         </div> <!--end content container-->
    </div>
    </div>
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>