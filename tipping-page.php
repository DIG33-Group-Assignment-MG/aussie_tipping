
<?php
/*VIEW MOVIE
*details of individual movies*/

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
       
   
   <body data-spy="scroll" data-target="#navbar-site" data-offset="80">
  

<div class="container" id="whitebackground">


<!-- ROW 1 -->
    <h2 class="mt-5">Games</h2>
    <div class="row">
      <article class="col-1 mt-4">

<?php
        
       $query = "SELECT * FROM Sports_Round_Matches ORDER BY match_id";
       $result = mysqli_query($connection, $query);

        //performs a while loop on the returned data
       while($row = mysqli_fetch_assoc($result)){
        
  
     
       echo "<p>{$row['fixture_day']}<p>";
?>
<!--creates nested columns-->
      </article>
         <div class="row col-10">
             <div class="col-3 mt-4">

<?php

                   echo "<p>{$row['Home_Team_ID']}</p>";

?>

            <!--  </div>   
              <div class="col-2"> -->
         
<?php         
         
               //    echo "<img src=" . $row['icon'] . " alt='team icon'>";   
     
?>
     
              </div>
              <div class="col-3 mt-4">
<?php

                   echo "<p>{$row['Away_Team_ID']}</p>";
            
?>            
            
           <!--   </div>   
              <div class="col-2"> -->
            
<?php            
     //              echo "<img src=" . $row['icon'] . " alt='team icon'>";   
     
?>     
              </div>
            </div>
          <article class="col-1 mt-4">
<!--end of nested columns-->      
<?php

                   echo "<p>{$row['fixture_time']}</p>";

        }       
?>
      </article>
    </div><!-- row -->   
      
     
<?php     
      
      
      
      
      
      
      
      
  
        //Tests if there was a query error
        if (!$result) {
        die("Database query failed.");
        }
      

        //releases returned data
        mysqli_free_result($result);
      
        //closes database connection
        mysqli_close($connection);
      
?>

<!-- ROW 1 -->
    
    </div><!-- row --></div><!-- container -->
</html>

    
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



