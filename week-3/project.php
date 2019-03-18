<?php
require 'nav.php';

date_default_timezone_set("Europe/Amsterdam");
?>
<div class="time">
	<?php  

$time = date('H:i A');
  	?>
  	
  </div>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>portefolio</title>
</head>
<body>
<h2><?php echo $time; ?></h2> <!-- de tijd -->
<div class="Me background">
 		<i class="fas fa-user"></i>
 		<i class="far fa-address-book"></i>
 		<i class="fas fa-home"></i>
 		<i class="fas fa-graduation-cap"></i>

  </div>
  <body>


</body>
</html>