<?php 
//Muutujad
$myName = "Krislyn";
$myFamilyName = "Luks";
$practiceStarted = "2017-09-11 8.15";

//echo strtotime($practiceStarted);
//echo strtotime("now");
//$timePassed = strtotime ("now") - strtotime ($practiceStarted); 
//echo $timePassed;

$hourNow = date("H");
$partOfDay = "";

if ($hourNow < 8){
$partOfDay = "varane hommik.";
}
if ($hourNow >= 8) {
	$partOfDay = "koolipäev";
}

	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Krislyn Luks</title>
</head>
<body>
<h1>About me</h1>
<p>I'm pretty boring, but this video sure isn't.</p>
	<div class="background"></div>
	<div class="container">
		
		<div class="movie-container">
			<iframe width="800" height="450" src="http://www.youtube.com/embed/BEMaH9Sm3lQ" frameborder="0" class="movie" allowfullscreen></iframe>
		</div>
	<p> .. </p>
	
	<?php
	echo "Täna on vastik ilm.";
	echo "<p>Täna on ";
	echo date("d.m.Y");
	echo ".</p>";
	echo "Lehe laadimise hetkel oli kell: " .date("H:i:s");
	echo "Praegu on " .$partOfDay .".";
	?>
	<p> PHP käivitatakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi jälle "kalkuleerida", siis laetakse kogu leht uuesti.</p>
	<?php
	echo "<p>Lehe autori täisnimi on: " .$myName ." " .$myFamilyName .".</p>";
	?>
	
	</body>
</html>