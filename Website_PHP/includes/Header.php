<?php
require './config/config.php';
require './includes/form_handlers/register_handler.php';
require './includes/form_handlers/login_handler.php';

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