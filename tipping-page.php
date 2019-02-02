
<?php
//The tipping page, allows a user to pick the winner of games in a particular upcoming round. The user can also use the page to change the tips./

//links to the config file
require 'config.php';

?>
<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Tipping Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles2.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Aussie Tipping</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="members-page.php">Members </a>
          </li>
        
          </ul>
      
    </div>
    </nav>

   <main class=bg>
       
   
  <div class="container col-12" id="whitebackground">


    <h1 class="mt-5 text-center">Tipping</h1>
   <img src="/images/Sports/Big Bash League/bbl.png" width="100"> 
 
  
   <div class="row">
        <div class="container col-md-3 order-2">
      <img src="images/Site/horselagerpromo.png">
      
  </div>
  
 <div class="container col-md-4">
   <h3>Competition Name (placeholder)</h3>
   <h4>Round 1</h4>
   </div>
  </div>
   <div class="container col-4-sm">
      <form>
       <form>
       <h5>Date Venue</h5><p class="tip"><label class="form-check-label-inline" for="winner">
     <input class="form-check-input" type="radio" name="winner" id="winner" value="option1"><img src="images/Teams/BBL/Renegades.png"> Hometeam
    </label>
    VS
     <label class="form-check-label-inline" for="winner">
      <img src="images/Teams/BBL/Strikers.png"> 
      Awayteam <input class="form-check-input-inline" type="radio" name="winner" id="winner" value="option2">
      </label></p>
      </form>
      <hr>
       <form>
        <h5>Date Venue</h5><p class="tip"><label class="form-check-label-inline" for="winner">
     <input class="form-check-input" type="radio" name="winner" id="winner" value="option3"><img src="images/Teams/BBL/Hurricanes.png"> Hometeam
    </label>
    VS
     <label class="form-check-label-inline" for="winner">
      <img src="images/Teams/BBL/Heat.png"> 
      Awayteam <input class="form-check-input-inline" type="radio" name="winner" id="winner" value="option4">
      </label></p>
      </form>
      <hr>
      <from>
        <h5>Date Venue</h5><p class="tip"><label class="form-check-label-inline" for="winner">
     <input class="form-check-input" type="radio" name="winner" id="winner" value="option5"><img src="images/Teams/BBL/Hurricanes.png"> Hometeam
    </label>
    VS
     <label class="form-check-label-inline" for="winner"> 
      <img src="images/Teams/BBL/Stars.png"> 
      Awayteam <input class="form-check-input-inline" type="radio" name="winner" id="winner" value="option6">
      </label></p>
      </form>
      <hr>
      <form>
     <h5>Date Venue</h5><p class="tip"><label class="form-check-label-inline" for="winner">
     <input class="form-check-input" type="radio" name="winner" id="winner" value="option7"><img src="images/Teams/BBL/Sixers.png"> Hometeam
    </label>
    VS
    <label class="form-check-label-inline" for="winner">
      <img src="images/Teams/BBL/Thunder.png"> 
      Awayteam <input class="form-check-input-inline" type="radio" name="winner" id="winner" value="option8">
      </label>
     </form>
   <button type="submit" name="submit"  class="btn btn-primary btn-center" id="submit">Enter Picks</button></button>
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
    <script src="global.js"></script>
  </body>
</html>



