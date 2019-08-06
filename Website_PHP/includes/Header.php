<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "nexus");

if(mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno(); 
}

// Declaring variables for registration to prevent errors
$first_name = "";
$last_name = "";
$email = "";
$email_confirm = "";
$password = "";
$password_confirm = "";
$date = "";
$error_array = array();

if (isset($_POST['register_button'])) {

  // Set values from registration form POST
  $first_name = strip_tags($_POST['reg_first_name']);
  $first_name = str_replace(' ', '', $first_name);
  $first_name = ucfirst(strtolower($first_name));
  $_SESSION['reg_first_name'] = $first_name;

  $last_name = strip_tags($_POST['reg_last_name']);
  $last_name = str_replace(' ', '', $last_name);
  $last_name = ucfirst(strtolower($last_name));
  $_SESSION['reg_last_name'] = $last_name;

  $email = strip_tags($_POST['reg_email']);
  $email = str_replace(' ', '', $email);
  $email = ucfirst(strtolower($email));
  $_SESSION['reg_email'] = $email;

  $email_confirm = strip_tags($_POST['reg_email_confirm']);
  $email_confirm = str_replace(' ', '', $email_confirm);
  $email_confirm = ucfirst(strtolower($email_confirm));
  $_SESSION['reg_email_confirm'] = $email_confirm;

  $password = strip_tags($_POST['reg_password']);
  $password_confirm = strip_tags($_POST['reg_password_confirm']);

  $date = date("Y-m-d");

  if ($email == $email_confirm) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $email = filter_var($email, FILTER_VALIDATE_EMAIL);

      $email_check = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

      $num_rows = mysqli_num_rows($email_check);

      if ($num_rows > 0) {
        array_push($error_array, "Email already in use<br>");
      }

    }
    else {
      array_push($error_array, "Email must follow format: user@email.com<br>");
    }
  }
  else {
    array_push($error_array, "Emails don't match<br>");
  }

    if (strlen($first_name) > 25 || strlen($first_name) < 2) {
      array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
    }

    if (strlen($last_name) > 25 || strlen($last_name) < 2) {
      array_push($error_array, "Your last name must be between 2 and 25 characters<br>");
    }

    if ($password != $password_confirm) {
      array_push($error_array, "Your passwords do not match<br>");
    }
    else {
      if (!ctype_alnum($password)) {
        array_push($error_array, "Your password can only contain english characters or numbers<br>");
      }
    }

    if (strlen($password) > 30 || strlen($password) < 5) {
      array_push($error_array, "Your password must be between 5 and 30 characters<br>");
    }

    if(empty($error_array)) {
      $password = password_hash($password, PASSWORD_DEFAULT);

      $username = strtolower($first_name . "_" . $last_name);
      $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");

      $i = 0;
      while(mysqli_num_rows($check_username_query) != 0) {
        $i++;
        $username = $username . "_" . $i;
        $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
      }

      $rand = rand(1, 2);
      $profile_pic = "assets/images/profile_pics/defaults/" . ($rand == 1) ? "head_deep_blue.png" : "head_emerald.png";

      $insert_query = mysqli_query($con, "INSERT INTO users VALUES ('', '$first_name', '$last_name', '$username', '$email', '$password', '$date', '$profile_pic', '0', '0', 'no', ',')");

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
  <a id="logo-link" class="navbar-brand" href="#"><img id="logo" src="./assets/images/DiplomacyImage.png" /></a>
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