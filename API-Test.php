<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Aussie Tipping API Test Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this site -->
    <link href="/css/styles.css" rel="stylesheet" type="text/css">>
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
            <a class="nav-link" href="#">User APIs <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Competition APIs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sport APIs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home Page</a>
          </li>
         </ul>
        <button type="button" class="btn btn-primary">Register</button>
        <button type="button" class="btn btn-secondary">Login</button>
  
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

    <h1>New User</h1>
<?php
require 'config.php';

// Check if form has been submitted, then process
if (isset($_POST['submit'])) {

  // first check all form inputs aren't empty
  if ( $_POST['real_name'] == "" ||
       $_POST['user_name'] == "" ||
       $_POST['password'] == ""  ||
       $_POST['email'] == ""
  ){
    echo "Error. Make sure no fields are left blank.";

  }else{

    // Run SQL query to create new book row
    $query  = "INSERT INTO Users (name,username,password,email_address)";
    $query .= " VALUES (";
    $query .= " '{$_POST['real_name']}','{$_POST['user_name']}','{$_POST['password']}','{$_POST['email']}'";
    $query .= ")";
    
    // run the Query
    $result = mysqli_query($connection, $query);
    
    // Check if query result was successful 
    if ($result) {
      // Success
      echo "Success! Your new user has been added.<br>";
      echo '<a href="API-Test.php">Reload</a>';
      die();

    } else {
      // Query Failure
      die("Database query failed. " . mysqli_error($connection));
    }
  }

}



?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <div class="form-group">
    <div class="col-4">
        <label for="full name">Full Name</label>
        <input type="text" class="form-control" name="real_name" placeholder="Full Name">
    </div>
  </div>
  <div class="form-group">
    <div class="col-4">
        <label for="username">User Name</label>
        <input type="text" class="form-control" name="user_name" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <div class="col-4">
        <label for="InputPassword">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-4">
        <label for="InputEmail">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
  </div>
  <button type="submit" name="submit"  value="Submit"class="btn btn-primary">Submit</button>
</form>

  </body>
</html>

    
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



