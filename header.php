<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="How to train your dragon Fan Page">
  <meta name="author" content="">

  <title>Train Your Dragon </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="favicon.ico">

  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">


</head>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Train Your Dragon</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" 
      aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="dragons.php">Dragons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="videos.php">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="games.php">Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="drawings.php">Drawings</a>
          </li>
          <?php 
            if(isset($_SESSION['id'])) {
              ?>
               <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              <?php
            } else {
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php">SignUp</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signin.php">Login</a>
                </li>
              <?php
            }
           ?>
        
          
          
        </ul>
      </div>
    </div>
  </nav>