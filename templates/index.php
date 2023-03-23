<?php

    // SIGN UP

    session_start();

    // initializing variables
    $username = "";
    $errors = array(); 
    
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'regine');
    
    // REGISTER USER
    if (isset($_POST['signup'])) {
      // receive all input values from the form
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, $_POST['password']);
      
      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if (empty($username)) { array_push($errors, "Username is required"); }
      if (empty($password)) { array_push($errors, "Password is required"); }
      
    
      // first check the database to make sure 
      // a user does not already exist with the same username and/or email
      $user_check_query = "SELECT * FROM users WHERE username='$username'";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);

      if (empty($username) || empty($password)) {
        echo "<script> alert('fill in the input first') </script>";
    }
      
      if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }
    
      }
    
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
          $password = md5($password); //encrypt the password before saving in the database
    
          $query = "INSERT INTO users (username, password) 
                    VALUES('$username','$password')";
          mysqli_query($db, $query);
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "<script> alert('You are now Log in.') </script>";
          header('location: database.php');
      }
    } else if (isset($_POST['login'])) {
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
  
      if (empty($username) || empty($password)) {
          echo "<script> alert('fill in the input first') </script>";
      } else {
        $queryValidate =  "SELECT * FROM users WHERE username = '$username' AND password = md5('$password') ";
        $sqlValidate = mysqli_query($db, $queryValidate);
  
        if (mysqli_num_rows($sqlValidate) > 0) {
          echo "<script> alert('You are now login!') </script>";
         
        }else {
          header('location: database.php');
        }
  
      }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../static/css/style.css" type="text/css" media="all" />
    
    <title>Master the Basics - Home</title>

    <style>
      #home {
        height: 100vh;
        background: url('../static/img/bg1.png');
        background-size: cover;
        background-repeat: no-repeat;
  
      }

    #home .container{
      margin-top: 100px;
    }

    </style>
  </head>
  <body>
  <section
      id="home"
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center"
    >
      <div class="container">
        <div class="d-sm-flex p-5 align-items-center justify-content-center">
          
        <div>
            <h1>Mastering The Basics</h1>
            <p class="lead">
              and Become a <span class="text-warning">Web Developer</span>
            </p>
            <blockquote class="pt-3">
              “Any fool can write code that a computer can understand. Good
              programmers write code that humans can understand.”
              <p>~ Martin Fowler</p>
            </blockquote>
            <button
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#signup"
            >
              Sign Up Now
            </button>
            <button 
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#login"
            >
              Log in
            </button>
            
          </div>
        </div>
      </div>
    </section>

    <!-- SIGN UP MODAL -->

  <div class="modal fade" id="signup" tabindex="-1"   aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../templates/index.php" method="post" class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" require>
            <label for="password" class="form-label">password</label>
            <input type="password" name="password" id="password" class="form-control" require>
            <input type="submit" value="signup" name='signup' class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- SIGN UP END MODAL -->
<!-- LOG IN MODAL -->

<div class="modal fade" id="login" tabindex="-1"   aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../templates/home-page.php" method="post" class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" require>
            <label for="password" class="form-label">password</label>
            <input type="password" name="password" id="password" class="form-control" require>
            <input type="submit" value="Login" name='login' class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
