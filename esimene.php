<?php
	//Muutujad
	$myName = "Krislyn";
	$myFamilyName = "Luks";
	//$practiceStarted = "2017-09-11 8.15";
	$practiceStarted = date("d.m.Y") ." " ."8.15";
	
	//echo strtotime($practiceStarted);
	//echo strtotime("now");
	$timePassed = round((strtotime("now") - strtotime($practiceStarted)) / 60);
	echo $timePassed;
	
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8){
		$partOfDay = "varane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolip�ev";
	}
	if ($hourNow >= 16){
		$partOfDay = "vaba aeg";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Krislyn Luks
	</title>
</head>
<body>
	<h1>Krislyn</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust t�siseltv�etavat sisu.</p>
	
	
	<?php
		echo "<p>T�na on vastik ilm!</p>";
		echo "<p>T�na on ";
		echo date("d.m.Y");
		echo ".</p>";
		echo "<p>Lehe laadimise hetkel oli kell: " .date("H:i:s") ."</p>";
		echo "Praegu on " .$partOfDay .".";
	?>
	<p>PHP k�ivitatakse lehe laadimisel ja siis tehakse kogu t�� �ra. Hiljem, kui vaja midagi j�lle "kalkuleerida", siis laetakse kogu leht uuesti.</p>
	<?php
		echo "<p>Lehe autori t�isnimi on: " .$myName ." " .$myFamilyName .".</p>";
	?>
</body>
</html>