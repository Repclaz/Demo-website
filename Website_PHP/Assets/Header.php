<?php
$con = mysqli_connect("localhost", "root", "", "social");

if(mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno(); 
}

// Declaring variables for registration to prevent errors
$fname = "";
$lname = "";
$email = "";
$email_confirm = "";
$password = "";
$password_confirm = "";
$date = "";
$error_array = "";

if (isset($_POST['register_button'])) {

  // Set values from registration form POST
  $fname = strip_tags($_POST['reg_fname']);
  $fname = str_replace(' ', '', $fname);
  $fname = ucfirst(strtolower($fname));

  $lname = strip_tags($_POST['reg_fname']);
  $lname = str_replace(' ', '', $lname);
  $lname = ucfirst(strtolower($lname));

  $email = strip_tags($_POST['reg_email']);
  $email = str_replace(' ', '', $email);
  $email = ucfirst(strtolower($email));

  $email_confirm = strip_tags($_POST['reg_email_confirm']);
  $email_confirm = str_replace(' ', '', $email_confirm);
  $email_confirm = ucfirst(strtolower($email_confirm));

  $password = strip_tags($_POST['reg_password']);
  $password_confirm = strip_tags($_POST['reg_password_confirm']);

  $date = date("Y-m-d");

  if ($email == $email_confirm) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    }
    else {
      echo "Email must follow format: user@email.com";
    }
  }
  else {
    echo "Emails don't match";
  }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/Main.css">
	<link rel="stylesheet" type="text/css" href="css/Header.css">
	<!--Meta-->
    <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

</head>
<body>
		<!--
		If made in php the header will be on a seperate file
		-->
		<header id="header">
<nav class="navbar navbar-expand-lg navbar-dark">
  <a id="logo-link" class="navbar-brand" href="#"><img id="logo" src="./Images/DiplomacyImage.png" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tutorial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gameplay</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nexus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link nav-item-right" href="#">Join The Community</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-item-right" href="#">Account</a>
      </li>
    </ul>
  </div>
</nav>
		</header>