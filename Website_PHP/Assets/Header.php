<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/Main.css">
	<link rel="stylesheet" type="text/css" href="css/Header.css">
	<!--Meta-->
    <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

</head>
<body>
		<!--
		If made in php the header will be on a seperate file
		-->
		<header id="Header">
			<!--If PHP then this will need to be a POST method-->
			<img id="HomeLogo" src="Images/DiplomacyImage.png"/>
			<button id="Profile">Account</button>
			<button id="Community">Join The Community</button>
			
			<button id="Home">Home</button>
			<button id="Tutorial">Tutorial</button>
			<button id="Gameplay">Gameplay</button>
			<button id="Nexus">Nexus</button>
			<button id="About">About</button>
		</header>
			<!--mobile header-->
		<header id="MobileHeader">
			<div id="SideButton" class="container" onclick="toggle(this)">
 				<div class="bar1"></div>
  				<div class="bar2"></div>
 				<div class="bar3"></div>
			</div>
			<h1 id="MobileTitle">Diplomacy Nexus</h1>
		</header>