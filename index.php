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

    <title>Homepage Aussie Tipping</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles2.css" rel="stylesheet" type="text/css">>
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
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="sports.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="sports.php">NRL Tipping</a>
              <a class="dropdown-item" href="sports.php">AFL Tiiping</a>
              <a class="dropdown-item" href="sports.php">BBL Tipping</a>
            </div>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          
          </ul>
         <a href='registration.php'><button type='button' class='btn btn-primary' id='register_button'>Register</button></a> 
         <a href='login.php'><button type='button' class='btn btn-primary' id='login_button'>Login</button></a> 
         
         <!--drop down login in form on menu that is not working yet so coded out-->
         <!--<li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i></i></a></li>
           <li class="dropdown order-1">
                <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">
                          <form action="/APIs/login_user.php" method="post" id="login_user">
                            <div class="form-group">
                                  <label for="username">User Name</label>
                                  <input type="text" class="form-control" name="user_name" autocomplete="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                   <label for="InputPassword">Password</label>
                                   <input type="password" class="form-control" name="password" autocomplete="new-password" placeholder="Password" > 
                               </div>
                                   <button type="submit" name="submit" class="btn btn-primary" id="submit_login">Submit</button>
                              </form>
                        </li> -->
                    </ul>
                <!--</li>-->
            
       
        </div>
    </div>
        </div>
        </nav>

<main class="bg">
  <div role="main" class="container">
    
   
    <div class="mt-4">
      <br>
       <p class="homepageheading text-center">Aussie Tipping</p>
       <h1 class="text-center" id="mainheading">Free Sports Tipping.</h1> 
     </div>
    <div class="content container-fluid mt-5">
       <div class="row">
          <div class= "maintext col-sm-4 mt-3">
             
              <p class="text-center text-fluid">Create a tipping competition for you and your mates OR join a tipping competition already started by a mate. Click on a sport's logo to find out about the sports that are available, or register to join.</p>
          </div>
          <!--carousel code-->
          <section class="col-sm-4">
            <div class="carousel" id="homepagecarousel" data-ride="carousel">
               <a href="sports.php"><div class="carousel-item active"></a>
                <img class="img-fluid" src="images/Site/afl.png" alt="afl logo">
              </div>
              <div class="carousel-item">
                <a href="sports.php"><img class="img-fluid" src="images/Site/bbl.png" alt="big bash league logo"></a>
              </div>
              <div class="carousel-item">
                <a href="sports.php"> <img class="img-fluid" src="images/Site/nrl.png" alt="nrl logo"></a>
              </div>
              <a class="carousel-control-prev" href="#homepagecarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                  <span class="sr-only">Previous</span>
                </span>
              </a>
              <a class="carousel-control-next" href="#homepagecarousel" role="button" data-slide="prev">
                <span class="carousel-control-next-icon" aria-hidden="true">
                  <span class="sr-only">Next</span>
                </span>
              </a>
            </div> <!--end carousel div-->
          </section> <!-- end carousel code-->
          <div class="col-sm-4 mt-4"> <!--horse lager logo-->
            <img class="img-fluid" src="images/Site/horse.png">
          </div> <!--end horse lager div-->
     </div> <!--end row-->
     </div> <!--end content container-->
    
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