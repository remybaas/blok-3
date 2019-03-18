<!DOCTYPE html>
<html>
<head>
	<?php 
	date_default_timezone_set("Europe/Amsterdam");
	$time = date('H:i');
 	?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>mijn portefolio</title>
	<meta http-equiv="refresh" content="60">
</head>
<body>
<div class="col-sm-12 navbar">
	<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>

    <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
</div>
    <div class="col-sm-2 balk " style="">balk
    	<br>
    	<h2><?php echo $time; ?></h2> <!-- de tijd -->

    </div>
    <div class="col-sm-8 main" style="">
    	<img class="portefolio" src="../image/blur_nature.jpg">
    </div>
    <div class="col-sm-2 menu" style="">menu</div>
    <div class="col-sm-8 contacts" style="">contacten</div>
    <div class="col-sm-4 info" style="">informatie</div>
    <div class="col-sm-12 footer" style="">footer</div>
</body>
