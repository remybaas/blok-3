<?php
date_default_timezone_set("Amsterdam/Nedeland");
$times = date('H:i:sA');

if ($times > "24.00") {
    $message = "Goede nacht!";
    $image = "images/night.png";
}

if ($times > "06.00") {
    $message = "Goede morgen!";
        $image = "images/morning.png";
}

if ($times > "12.00") {
    $message = "Goede middag!";
        $image = "images/afternoon.png";
}

if ($times > "18.00") {
    $message = "Goede avond!";
        $image = "images/evening.png";
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <title>Remy Baas</title>
</head>
<body style="background-image: url(<?php echo $image;?>);">
  <h1> Remy Baas<!--  --></h1>
    <h2><?php echo $times; ?> <!-- de tijd --></h2>
</body>
</html>