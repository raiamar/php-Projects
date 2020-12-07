<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login-System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" style="color: lime;">LoginSystem</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

<!--this is for changing login and logout -->
<?php 
  if (isset($_SESSION["usersId"])) {
      echo "<li class='nav-item'>
        <a class='nav-link' href='includes/logout.inc.php'>Log-out</a>
      </li>";
  } else {
     echo "<li class='nav-item'> <a class='nav-link'  href='login.php'>Login</a> </li>";
     echo "<li class='nav-item'> <a class='nav-link'  href='sinUp.php'>SignUp</a> </li>";
  }
?>
      
<!--
      <li class='nav-item'>
        <a class='nav-link' href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sinUp.php">SignUp</a>
      </li>
      -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div style="margin: 10px;"></div>